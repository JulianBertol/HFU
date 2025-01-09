public class Observer {
    private State state;
    public Observer(State state) {
        this.state = state;
    }

    public void update(final Observable observable){
        this.state = observable.state;
    }

    public State getState(){
        return this.state;
    }
}