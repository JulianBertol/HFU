package com.tim.se.library;

import org.junit.jupiter.api.Test;

import java.util.Date;
import java.util.List;

import static org.junit.jupiter.api.Assertions.*;

class LibraryTest {
private Library library;
    @org.junit.jupiter.api.BeforeEach
    void setUp() {
        Customer customer1 = new Customer("Julian", "Bertol", 20, "Informatik", "Email@Email.com", 1);
        Customer customer2 = new Customer("Tim", "Zolleis", 20, "Medizin", "Tim@Tim.com", 0);
        Customer[] customers = {customer1, customer2};
        LibraryItem[] libraryItems = new LibraryItem[10];
        for (int i = 0; i < 10; i++) {
            Medium medium = new Medium("Herr der Ringe " + i);
            String id = Integer.toString(i);
            LibraryItem libraryItem = new LibraryItem(medium, id);
            libraryItems[i] = libraryItem;
        }
        this.library = new Library(customers, libraryItems);
    }

    @Test
    void test_create_order(){
        final Date endDate = new Date();
        endDate.setDate(21);
        Order order = new Order(new Date(), endDate, List.of(gettestitems(3)));
        this.library.getCustomers()[0].addOrder(order);

        final Date endDate2 = new Date();
        endDate2.setDate(11);
        Order order2 = new Order(new Date(), endDate2, List.of(gettestitems(5)));
        this.library.getCustomers()[1].addOrder(order2);
    }

    private OrderItem[] gettestitems(int size){
        OrderItem[] item = new OrderItem[size];
        final Date endDate = new Date();
        endDate.setDate(31);
        for (int i = 0; i < size; i++) {
            item[i] = new OrderItem(new Date(), endDate, this.library.get_item("Herr der Ringe " + i));
        }
        return item;
    }
}