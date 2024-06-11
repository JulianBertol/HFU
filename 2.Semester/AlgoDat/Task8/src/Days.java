import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;

public class Days {
    private List<String> days= new ArrayList<>();
    private void createist(){
        days.add("Montag");
        days.add("Dienstag");
        days.add("Mittwoch");
        days.add("Donnerstag");
        days.add("Freitag");
        days.add("Samstag");
        days.add("Sonntag");
    }

    private List<String> getlist(){
        return days;
    }

    public Set<String> getHasSet(){
        return new HashSet<>(this.getlist());
    }
}
