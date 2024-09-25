import java.util.Date;

public class Client {
    private String name;
    private Date birth_date;
    private String email;
    private String phone;
    private String id;
    private Date creation_date;

    public Client(String name, Date birth_date, String email, String phone) {
        this.name = name;
        this.birth_date = birth_date;
        this.email = email;
        this.phone = phone;

        id = String.valueOf(Math.random() * 100);
        creation_date = new Date();
    }



    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }



    public Date getBirth_date() {
        return birth_date;
    }
    public void setBirth_date(Date birth_date) {
        this.birth_date = birth_date;
    }



    public String getEmail() {
        return email;
    }
    public void setEmail(String email) {
        this.email = email;
    }



    public String getPhone() {
        return phone;
    }
    public void setPhone(String phone) {
        this.phone = phone;
    }

    

    
}
