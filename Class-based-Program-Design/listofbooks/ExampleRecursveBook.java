package listofbooks;

public class ExampleRecursveBook {
    public static void main(String[] args) {
        // Books
        Book htdp = new Book("HtDP", "MF", 2001, 60);
        Book lpp = new Book("LPP", "STX", 1942, 25);
        Book ll = new Book("LL", "FF", 1986, 10);

        ILoBook emptyList = new MtLoBooks();
        ILoBook twoBooks = new NonMtLoBooks(ll, emptyList);
        ILoBook threeBooks = new NonMtLoBooks(lpp, twoBooks);
        ILoBook fourBooks = new NonMtLoBooks(htdp, threeBooks);

        System.out.println(fourBooks.salePrice(5));
        System.out.println(fourBooks.count());
        System.out.println(fourBooks.allBefore(1940));
    }
}
