import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.concurrent.locks.Lock;
import java.util.concurrent.locks.ReentrantLock;

public class EventDispatcherImpl implements EventDispatcher {
    private final List<ActionListener> actionListeners;

    // Map, die jedem ActionListener ein eigenes Lock-Objekt zuordnet
    private final Map<ActionListener, Lock> listenerLocks;

    public EventDispatcherImpl() {
        actionListeners = new ArrayList<>();
        listenerLocks = new HashMap<>();
    }

    @Override
    public synchronized void addActionListener(ActionListener al) {
        if (al != null) {
            actionListeners.add(al);
            // Für jeden Listener ein eigenes Lock erstellen
            listenerLocks.put(al, new ReentrantLock());
        }
    }

    @Override
    public void processActionEvent(ActionEvent ae) {
        // Für jeden registrierten ActionListener einen eigenen Thread erstellen
        for (ActionListener listener : actionListeners) {
            // Sicherstellen, dass wir das richtige Lock für den Listener haben
            final Lock listenerLock = listenerLocks.get(listener);

            Thread workerThread = new Thread(() -> {
                // Vor der Ausführung das Lock für diesen speziellen Listener erwerben
                listenerLock.lock();
                try {
                    // Nur ein Thread kann gleichzeitig die actionPerformed-Methode für diesen Listener ausführen
                    listener.actionPerformed(ae);
                } finally {
                    // Lock immer freigeben, auch wenn Ausnahmen auftreten
                    listenerLock.unlock();
                }
            });

            // Thread starten
            workerThread.start();
        }
    }
}