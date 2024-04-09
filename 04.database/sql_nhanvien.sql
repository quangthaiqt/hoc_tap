SELECT * FROM nhanvien nv 
WHERE manv = 1

UPDATE nhanvien
SET dienthoai = '000000000'
WHERE manv = 1;

DELETE FROM nhanvien
WHERE  manv = 7;

----
INSERT 
INTO hocmysql.nhanvien(hoten, ngaysinh, dienthoai, hsluong) 
VALUES ('a', STR_TO_DATE('10/10/2020', '%m/%d/%Y'), '11111', 1.22)

UPDATE nhanvien SET hoten = 'bbbb11', ngaysinh = STR_TO_DATE('2020-11-11', '%Y-%m-%d'), dienthoai = '111111', hsluong = 2.11 WHERE manv = 6;


