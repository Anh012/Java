package KT2;

public class NgayThang {
    private int ngay;
    private int thang;
    private int nam;
    public int getNgay() {
        return ngay;
    }
    public void setNgay(int ngay) {
        this.ngay = ngay;
    }
    public int getThang() {
        return thang;
    }
    public void setThang(int thang) {
        this.thang = thang;
    }
    public int getNam() {
        return nam;
    }
    public void setNam(int nam) {
        this.nam = nam;
    }

    @Override
    public String toString() {
        return  ngay+"/" + thang+"/"+ nam ;
    }
}
