import java.awt.event.ActionListener;

public class Main_EventDispatcher {
    public static void main(String[] args) {
        ActionListenerImpl1 listener = new ActionListenerImpl1();
        ActionListenerImpl2 listener2 = new ActionListenerImpl2();
        EventDispatcherImpl eventDispatcher = new EventDispatcherImpl();

        eventDispatcher.addActionListener((ActionListener) listener);
        eventDispatcher.addActionListener((ActionListener) listener2);

        eventDispatcher.processActionEvent(null);
    }
}
