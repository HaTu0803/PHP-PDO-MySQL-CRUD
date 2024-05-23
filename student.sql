CREATE DATABASE IF NOT EXISTS student_crud;
USE student_crud;

-- Xóa bảng cũ nếu tồn tại
DROP TABLE IF EXISTS students;

-- Tạo bảng mới
CREATE TABLE students (
    code INT AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    email VARCHAR(100) NOT NULL,
    score DECIMAL(4,2) NOT NULL,
    PRIMARY KEY (code)
);

-- Chèn dữ liệu mới
INSERT INTO students (fullname, dob, email, score) VALUES
('Nguyen Van A', '1990-01-01', 'NVA@gmail.com', 8.5),
('Nguyen Van B', '1990-01-02', 'NVB@gmail.com', 7.5),
('Nguyen Van C', '1990-01-03', 'NVC@gmail.com', 9.0),
('Nguyen Van D', '1990-01-04', 'NVD@gmail.com', 7.0),
('Nguyen Van E', '1990-01-05', 'NVE@gmail.com', 8.0),
('Nguyen Van F', '1990-01-06', 'NVF@gmail.com', 9.5),
('Nguyen Van G', '1990-01-07', 'NVG@gmail.com', 7.5),
('Nguyen Van H', '1990-01-08', 'NVH@gmail.com', 8.0),
('Nguyen Van I', '1990-01-09', 'NVI@gmail.com', 8.5),
('Nguyen Van J', '1990-01-10', 'NVJ@gmail.com', 7.0),
('Nguyen Van K', '1990-01-11', 'NVK@gmail.com', 9.0),
('Nguyen Van L', '1990-01-12', 'NVL@gmail.com', 8.0),
('Nguyen Van M', '1990-01-13', 'NVM@gmail.com', 7.5),
('Nguyen Van N', '1990-01-14', 'NVN@gmail.com', 8.5),
('Nguyen Van O', '1990-01-15', 'NVO@gmail.com', 7.0),
('Nguyen Van P', '1990-01-16', 'NVP@gmail.com', 9.0),
('Nguyen Van Q', '1990-01-17', 'NVQ@gmail.com', 8.0),
('Nguyen Van R', '1990-01-18', 'NVR@gmail.com', 7.5),
('Nguyen Van S', '1990-01-19', 'NVS@gmail.com', 8.5),
('Nguyen Van T', '1990-01-20', 'NVT@gmail.com', 7.0),
('Nguyen Van U', '1990-01-21', 'NVU@gmail.com', 8.0),
('Nguyen Van V', '1990-01-22', 'NVV@gmail.com', 9.0),
('Nguyen Van W', '1990-01-23', 'NVW@gmail.com', 8.5),
('Nguyen Van X', '1990-01-24', 'NVX@gmail.com', 7.5),
('Nguyen Van Y', '1990-01-25', 'NVY@gmail.com', 8.0);
