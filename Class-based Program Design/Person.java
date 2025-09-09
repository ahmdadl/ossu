interface IPerson {
    public String getName();
    public int getAge();
    public char getFavColor();
}

public class Person implements IPerson {
    private String name;
    private int age;
    private char favouriteColor;
    
    Person (String name, int age, char favouriteColor) {
        this.name = name;
        this.age = age;
        this.favouriteColor = favouriteColor;
    }

    @Override
    public String getName() {
        return name;
    }

    @Override
    public int getAge() {
        return age;
    }

    @Override
    public char getFavColor() {
        return favouriteColor;
    }
}


