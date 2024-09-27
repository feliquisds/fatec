import java.time.Period;
import java.time.LocalDate;

public class Client {
    // attributes
    private String name;
    private LocalDate birth_date;
    private String email;
    private String phone;
    private String id;
    private LocalDate creation_date;



    // constructors
    public Client(String name, LocalDate birth_date, String email, String phone) {
        this.name = name;
        this.birth_date = birth_date;
        this.email = email;
        this.phone = phone;
        createAccountID();
    }

    public Client(String name, LocalDate birth_date, String email) {
        this.name = name;
        this.birth_date = birth_date;
        this.email = email;
        createAccountID();
    }

    private void createAccountID() {
        id = String.valueOf(Math.round(Math.random() * 100));
        creation_date = LocalDate.now();
    }



    // getters and setters
    public String getName() {return name;}
    public void setName(String name) {this.name = name;}

    public LocalDate getBirth_date() {return birth_date;}
    public void setBirth_date(LocalDate birth_date) {this.birth_date = birth_date;}

    public String getEmail() {return email;}
    public void setEmail(String email) {this.email = email;}

    public String getPhone() {return phone;}
    public void setPhone(String phone) {this.phone = phone;}



    // getters-only
    public String getId() {return id;}

    public LocalDate getCreation_date() {return creation_date;}



    // methods
    public int getAge() {return Period.between(birth_date, LocalDate.now()).getYears();}

    public int getYearsSinceAccountCreation() {return Period.between(creation_date, LocalDate.now()).getYears();}

    public int getAgeOnAccountCreation() {return Period.between(birth_date, creation_date).getYears();}

    public boolean isOver18() {return getAge() >= 18;}
}
