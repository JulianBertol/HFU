import bruch.Bruch;
public class MyList<T> {
    public ListElement<T> head; //erste element
    public ListElement<T> tail; //letzte element
    public int size;


    public void add(T x){
        ListElement<T> newList = new ListElement<>(x);
        if(this.head == null){
            this.head = newList;
        }else{
            this.tail.next = newList;
        }
        this.tail = newList;
        size++;
    }

    public int size(){
        return size;
    }

    public T get(int index){
        if(index > size || index < 0){
            throw new IndexOutOfBoundsException("Index out of Bounds");
        }
        ListElement<T> current = head;
        for(int i = 0; i<index; i++){
            current = current.next;
        }
        return current.value;
    }

    public T remove(int index){
        if(index > size || index < 0){
            throw new IndexOutOfBoundsException("Index out of Bounds");
        }
        ListElement<T> current = head;
        ListElement<T> bevore = null;
        for(int i = 0; i<index; i++){
            bevore = current;
            current = current.next;
        }
        if(bevore == null){
            this.head = current.next;
        }else{
            bevore.next = current.next;
        }

        if(current.next == null){
            this.tail = bevore;
        }

        size--;
        return current.value;
    }



  public static void main(String[] args) {

     MyList l= new MyList();
     for (int i=1; i<=10; ++i)
        l.add(8*i);
     l.remove(2);
     for (int i=l.size()-1; i>=0; --i)
         System.out.print(" " + l.get(i));
     System.out.println();

     MyList<Bruch> bruch_list = new MyList<Bruch>();
      Bruch x = new Bruch(2,1);
      Bruch y = new Bruch (5,8);
      Bruch z = new Bruch (1,2);
      bruch_list.add(x);
      bruch_list.add(y);
      bruch_list.add(z);
      bruch_list.remove(2);
      for (int i=bruch_list.size()-1; i>=0; --i)
          System.out.print(" " + bruch_list.get(i).get() + "\n");
      System.out.println();
  }
}
