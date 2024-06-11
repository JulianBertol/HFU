public class ListElement<T> {
        public T value;
        public ListElement<T> next;

        public ListElement(T value){
                this.value = value;
                this.next = null;
        }

}
