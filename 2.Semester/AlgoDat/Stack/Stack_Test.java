public class Stack_Test {
    public static void main(String[] args) {
        Stack stack = new Stack(100);
        System.out.println(stack.isEmpty());
        stack.push(10);
        System.out.println(stack.isEmpty());
        System.out.println(stack.top());
        stack.push(20);
        stack.pop();
        System.out.println(stack.top());
    }
}
