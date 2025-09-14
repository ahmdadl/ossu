package listofbooks;

interface ILoBook {
    int count();

    double salePrice(int discount);

    ILoBook allBefore(int year);

    ILoBook sortByPrice();
}
