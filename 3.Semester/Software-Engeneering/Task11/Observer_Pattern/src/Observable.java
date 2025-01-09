import java.util.ArrayList;
import java.util.List;

public class Observable {
    protected State state;
    public Observable(State states){
        state = states;
    }

    public List<Observer> observerlist = new ArrayList<>();

    public void attach(Observer observer){
        observerlist.add(observer);
    }

    public void detach(Observer observer){
        observerlist.remove(observer);
    }

    public void notify_observer(){
        for (int i = 0; i < observerlist.size(); i++) {
            observerlist.get(i).update(this);
        }
    }

}
