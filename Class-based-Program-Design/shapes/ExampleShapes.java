package shapes;

class ExampleShapes {
    ExampleShapes() {}

    public static void main(String[] args)
    {
        IShape c = new CircleShape(5, 10, 15, "red");
        IShape s = new SquareShape(15, 10, 5, "green");

        System.out.println(c.area());
        System.out.println(s.area());

    }
}
