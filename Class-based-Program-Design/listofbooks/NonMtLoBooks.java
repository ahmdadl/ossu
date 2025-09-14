package listofbooks;

public class NonMtLoBooks implements ILoBook {
    Book first;
    ILoBook rest;

    NonMtLoBooks(Book first, ILoBook rest) {
        this.first = first;
        this.rest = rest;
    }

    public int count() {
        return 1 + this.rest.count();
    }

    public double salePrice(int discount) {
        return first.discount(discount) + rest.salePrice(discount);
    }

    public ILoBook allBefore(int year) {
        if (this.first.PublishedBefore(year)) {
            return new NonMtLoBooks(this.first, this.rest.allBefore(year));
        } else {
            return this.rest.allBefore(year);
        }
    }

    public ILoBook sortByPrice() {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'sortByPrice'");
    }

}
