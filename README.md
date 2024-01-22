<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Introduction
Organizer@ & Admin Website for **EZEVENT Platform** 
- เป็นเว็บไซต์สำหรับใช้ใน EZEVENT แอพพลิเคชั่นมีเพิื่อให้ผู้ใช้ที่เป็น Organizer คอยจัดการกิจกรรมและจัดการผู้คน
- สำหรับ Admin คอนชยจัดการทุกสิ่งทุกอย่าง
- เป็น Web API สำหรับใช้ใน Mobile Application
## Tech stach & Architecture
### Tech Stack
1. **Laravel 10** Framework of PHP :
เฟรมเวิร์ก Fullstack ใช้ร่วมกับ Blade Component
2. **Vite** & **tailwind** :
Vite คือ Frontend and build tool ช่วยในการพัฒนาระบบหน้าบ้านได้อย่างรวดเร็ว
Tailwind คือ Style Framework
3. Mysql database & Redis : 
ฐานข้อมูลแบบ Relational Database และ Redis ฐานข้อมูลแบบ no-sql run in Ram สำหรับทำการ Caching
4. Xammp server : สำหรับจำลองเซิร์ฟเวอร์
### Architecture
- Design pattern base of **Model - Views - Controller (MVC)**
- Strong of OOP programming
- Diagram of MVC <br>
![image](https://github.com/RiwRiwara/Ezevent/assets/61749500/48d3f523-7a45-4fbe-92ab-cce6d1079c94) <br>
### **สิ่งที่สำคัญ** <br>
```
Model is responsible for maintaining application data and business logic.
View is a user interface of the application, which displays the data.
Controller handles user's requests and renders appropriate View with Model data
```
```
Model      เหมือนกับห้องเก็บของของแอปพลิเคชัน ทำหน้่าที่เก็บข้อมูลทั้งหมดเอาไว้ เช่น เป็นรายชื่อผู้ใช้ ผลลัพธ์ของเกม หรือข้อมูลใดๆก็ตาม 
           นอกจากนี้ โมเดลยังทำหน้าที่เหมือนสมองเล็กๆ ที่รู้จักคำนวณหรือตัดสินใจตามกฎเกณฑ์ต่างๆของแอปพลิเคชัน
View       เหมือนกับหน้าตาของแอปพลิเคชัน สิ่งที่ผู้ใช้เห็น ไม่ว่าจะเป็นปุ่ม กราฟิก ตัวหนังสือ ทั้งหมดก็มาจากวิว รับข้อมูลจากโมเดลมาแสดงผลในรูปแบบที่ดูเข้าใจง่ายและสวยงาม
Controller เหมือนคนคอยเฝ้าประตู ที่คอยรับคำสั่งจากผู้ใช้ ไม่ว่าจะเป็นการคลิกปุ่ม การกรอกข้อมูล แล้วคอนโทรลเลอร์ก็จะตัดสินใจว่าจะไปหยิบข้อมูลอะไรจากโมเดลมาให้วิวแสดงผล
           หรือจะบอกให้โมเดลไปคำนวณอะไรต่อ
```
