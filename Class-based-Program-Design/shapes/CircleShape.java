package shapes;

public class CircleShape implements IShape {
    int x;
    int y;
    int radius;
    String color;

    CircleShape(int x, int y, int radius, String color)
    {
        this.x = x;
        this.y = y;
        this.radius = radius;
        this.color = color;
    }

    public double area() {
        return Math.PI * this.radius * this.radius;
    }
}
