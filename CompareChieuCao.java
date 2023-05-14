package KT2;
import java.util.Comparator;
public class CompareChieuCao implements Comparator<NguoiThamGia> {
    @Override
    public int compare(NguoiThamGia o1, NguoiThamGia o2) {
        var highCompare = Float.compare(o1.getChieuCao(), o2.getChieuCao());
        if (highCompare != 0) {
            return highCompare;
        } else {
            var nameCompare = o1.getTen().compareTo(o2.getTen());
            if (nameCompare != 0) {
                return nameCompare;
            }else{
                return 0;
            }
        }
    }
}
