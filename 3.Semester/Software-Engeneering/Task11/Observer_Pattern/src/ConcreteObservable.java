public class ConcreteObservable extends Observable{
    public ConcreteObservable(State states) {
        super(states);
    }

    public State getState(){
        return this.state;
    }

    public void setState(State state){
        this.state = state;
        this.notify_observer();
    }
}
