"cypress-cucumber-preprocessor": {
  "nonGlobalStepDefinitions": true
},
Feature: sortgaming.com
    Scenario: เข้าหน้าเว็บ
        Given เข้าหน้าเว็บ
        When เช็คว่ามีปุ่มเข้าสู่ระบบ
        Then ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้

    Scenario: ทดสอบกรอกข้อมูลไม่ครบ
        Given มีช่อง username AND password
        When กรอกข้อมูลไม่ครบ
        Then ตรวจสอบว่าสามารถกดปุ่มยืนยันได้เเละมีrequiredว่าโปรดกรอกฟิลด์นี้
    Scenario: เช็คสมัครสมาชิก
        Given มีช่อง username AND password
        When กรอกข้อมูลในช่อง Username AND Password
        Then ตรวจสอบว่าสามารถกดปุ่มยืนยันได้เเละไปที่หน้าhome
    Scenario: ทดสอบออกจากระบบ
        Given มีปุ่มออกจากระบบ
        When กดปุ่มออกจากระบบ
        Then ตรวจสอบว่าสามารถกดปุ่มออกจากระบบได้เเละไปที่หน้าhome
    Scenario: ทดสอบกรอกข้อมูลไม่ครบในหน้าhome
        Given มีช่อง username AND password
        When กรอกข้อมูลในช่อง Username AND Password
        Then ตรวจสอบว่าสามารถกดปุ่มยืนยันได้เเละมีalert

    Scenario: ทดสอบlogin
        Given มีช่อง username AND password
        When กรอกข้อมูลในช่อง Username AND Password
        Then ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้เเละไปที่หน้าhome


