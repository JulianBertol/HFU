public class tests {
    public static void main(String[] args){
        State state = new State("test");
        assert(state.equals("test"));
        ConcreteObserver observer = new ConcreteObserver(state);
        assert (observer.toString().equals("test"));
        ConcreteObservable observable = new ConcreteObservable(state);
        State state2 = new State("Hallo");
        ConcreteObserver observer2 = new ConcreteObserver(state2);
        observable.attach(observer);
        observable.attach(observer2);
        assert(observable.observerlist.get(0).equals(observer));
        assert(observable.observerlist.get(1).equals(observer2));
        observable.setState(state2);
        System.out.println(observer.getState().toString());
        assert (observer.getState().toString().equals("Hallo"));
    }
}