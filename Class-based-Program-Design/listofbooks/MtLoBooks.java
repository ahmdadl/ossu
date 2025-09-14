package listofbooks;

class MtLoBooks implements ILoBook {
    public int count() {
        return 0;
    }

    public double salePrice(int discount) {
        return 0;
    }

    public ILoBook allBefore(int year) {
        return this;
    }

    public ILoBook sortByPrice() {
        return this;
    }
}
