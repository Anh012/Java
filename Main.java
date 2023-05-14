package KT2;

import java.io.IOException;

public class Main {
    public static void main(String[] args) throws IOException {
        QuanLY QL=new QuanLY();
        QL.Nhap();
        QL.Check();
        System.out.println("Sau khi sap xep: ");
        QL.sapxep();
        QL.Ifile();
        System.out.println("Doc lai thong tin file: ");
        QL.Ofile();
    }
}