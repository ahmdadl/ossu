package shapes;

class SquareShape implements IShape {
    int x;
    int y;
    int size;
    String color;

    SquareShape(int x, int y, int size, String color) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.color = color;
    }

    public double area() {
        return this.size * this.size;
    }    
}
