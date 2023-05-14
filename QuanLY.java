package KT2;

import java.io.*;

import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.util.ArrayList;

import java.util.List;
import java.util.Scanner;

public class QuanLY extends NguoiThamGia{
    private ArrayList<NguoiThamGia> list = new ArrayList<>();
    Scanner input =new Scanner(System.in);
    NgayThang NT=new NgayThang();
    public void Nhap(){
        System.out.println("Nhap so luong nguoi tham gia ");
        int n = input.nextInt();
        for(int i=0;i<n;i++){
            NguoiThamGia NTG =new NguoiThamGia();
            do {
                System.out.println("Nhap Ngay Sinh");
                NT.setNgay(input.nextInt());
            }while (NT.getNgay()<0||NT.getNgay()>31);
            do {
                System.out.println("Nhap Thang Sinh");
                NT.setThang(input.nextInt());
            }while (NT.getThang()<0||NT.getThang()>12);
            System.out.println("Nhap Nam Sinh");
            NT.setNam(input.nextInt());
            NTG.setNgaySinh(NT.toString());
            input.nextLine();
            System.out.println("Nhap ten cua nguoi tham gia");
            NTG.setTen(input.nextLine());
            System.out.println("Nhap chieu cao nguoi tham gia");
            NTG.setChieuCao(input.nextFloat());
            input.nextLine();
            System.out.println("Nhap dia chi nguoi tham gia ");
            NTG.setDiaCHi(input.nextLine());
            System.out.println("NHap phi duy tri hang thang");
            NTG.setPhiHT(input.nextFloat());
            if(NTG.getPhiHT()==0){
                System.out.println("phi duy tri hang thang bang 0 dung nhap");
                break;
            }
            list.add(NTG);
        }
        for(NguoiThamGia NTG : list){
            System.out.println(NTG);
        }
        input.nextLine();
    }
    public void Check(){
        System.out.println("Nhap vao dia chi can tim");
        String check = input.nextLine();
        for(NguoiThamGia NTG : list){
            if(NTG.getDiaCHi().equalsIgnoreCase(check)){
                System.out.println("Sua lai thong tin cua nguoi nay");
                do {
                    System.out.println("Nhap Ngay Sinh");
                    NT.setNgay(input.nextInt());
                }while (NT.getNgay()<0||NT.getNgay()>31);
                do {
                    System.out.println("Nhap Thang Sinh");
                    NT.setThang(input.nextInt());
                }while (NT.getThang()<0||NT.getThang()>12);
                System.out.println("Nhap Nam Sinh");
                NT.setNam(input.nextInt());
                NTG.setNgaySinh(NT.toString());
                input.nextLine();
                System.out.println("Nhap ten cua nguoi tham gia");
                NTG.setTen(input.nextLine());
                System.out.println("Nhap chieu cao nguoi tham gia");
                NTG.setChieuCao(input.nextFloat());
                input.nextLine();
                System.out.println("Nhap dia chi nguoi tham gia ");
                NTG.setDiaCHi(input.nextLine());
                System.out.println("NHap phi duy tri hang thang");
                NTG.setPhiHT(input.nextFloat());
                if(NTG.getPhiHT()==0){
                    System.out.println("phi fuy tri hang thang bang 0 dung nhap");
                    break;
                }
            }
        }
        for(NguoiThamGia NTG : list){
            System.out.println(NTG);
        }
    }
    public void sapxep(){
    list.sort(new CompareChieuCao());
        for(NguoiThamGia NTG : list){
            System.out.println(NTG);
        }
    }
    public void Ifile() throws IOException {
        FileWriter FW =new FileWriter("C:/Users/TiX/Desktop/data.txt",true);
        PrintWriter PW = new PrintWriter(FW,true);
        PW.println(list);
        PW.flush();
        PW.close();
    }
    public void Ofile() throws IOException {
        List<String> alltext = Files.readAllLines(Path.of("C:/Users/TiX/Desktop/data.txt"), StandardCharsets.UTF_8);
    for (String string :alltext){
        System.out.println(string);
    }
    }
}
