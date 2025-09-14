package person;

public class ExamplePerson {
    ExamplePerson() {}

    public static void main (String[] args)
    {
        IPerson ahmed = new Person("ahmed", 26, 'r');
        IPerson noura = new Person("noura", 23, 'b');

        System.out.println(ahmed.getName());
        System.out.println(noura.getName());
        System.out.println(noura.getAge());
    }
}