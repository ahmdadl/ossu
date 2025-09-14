package listofbooks;

public class Book {
    private String name;
    private String author;
    private double price;
    private int year;

    Book(String name, String author, double price, int year) {
        this.name = name;
        this.author = author;
        this.price = price;
        this.year = year;
    }

    public String getName() {
        return name;
    }

    public String getAuthor() {
        return author;
    }

    public double getPrice() {
        return price;
    }

    public int getYear() {
        return year;
    }

    double discount(double rate) {
        return price;
        // return price - (price * rate);
    }

    Book discountedBook() {
        return new Book(name, author, discount(.25), year);
    }

    boolean PublishedBefore(int year) {
        return this.year < year;
    }
}
