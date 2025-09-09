public class ExamplePerson {
    ExamplePerson() {}

    public static void main (String[] args)
    {
        Person ahmed = new Person("ahmed", 26, 'r');
        Person noura = new Person("noura", 23, 'b');

        System.out.println(ahmed.getName());
        System.out.println(noura.getName());
        System.out.println(noura.getAge());
    }
}