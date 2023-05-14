package KT2;

public class NguoiThamGia extends NgayThang {
    private String Ten;
    private String ngaySinh;
    private float chieuCao;
    private String diaCHi;
    private float phiHT;

    public String getTen() {
        return Ten;
    }

    public void setTen(String ten) {
        Ten = ten;
    }

    public float getChieuCao() {
        return chieuCao;
    }

    public void setChieuCao(float chieuCao) {
        this.chieuCao = chieuCao;
    }

    public String getDiaCHi() {
        return diaCHi;
    }

    public void setDiaCHi(String diaCHi) {
        this.diaCHi = diaCHi;
    }

    public float getPhiHT() {
        return phiHT;
    }

    public void setPhiHT(float phiHT) {
        this.phiHT = phiHT;
    }

    public String getNgaySinh() {
        return ngaySinh;
    }

    public void setNgaySinh(String ngaySinh) {
        this.ngaySinh = ngaySinh;
    }

    @Override
    public String toString() {
        return "NguoiThamGia{" +
                "Ten='" + Ten + '\'' +
                ", ngaySinh='" + ngaySinh + '\'' +
                ", chieuCao=" + chieuCao +
                ", diaCHi='" + diaCHi + '\'' +
                ", phiHT=" + phiHT +
                '}';
    }
}
