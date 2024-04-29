public class Stack {
    private int max;
    private int[] stack;
    public Stack(int val){
        this.stack = new int[val];
        this.max = 0;
    }
    public void push(int x){
    this.stack[max] = x;
    max ++;
    }

    public int top(){
        if(isEmpty())
            throw new IllegalStateException("Stack is Empty");
        return this.stack[max - 1];
    }

    public boolean isEmpty(){
        if(max == 0)
            return true;
        return false;
    }

    public void pop(){
        if(!isEmpty())
            max --;
        else
            throw new IllegalStateException("Stack is Empty");
    }
}
