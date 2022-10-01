/// <reference types="cypress" />
import { Given, When, Then, And } from "cypress-cucumber-preprocessor/steps";

Given("เข้าหน้าเว็บ", () => {
    cy.visit("https://esport.sortgaming.com", { timeout: 20000 });
})

When("เช็คว่ามีปุ่มเข้าสู่ระบบ", (string) => {
    cy.get('[active=""] > #endpoint > tp-yt-paper-item.style-scope > .title').contains("เข้าสู่ระบบ");
})

Then("ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้", () => {
    cy.get(':nth-child(1) > #items > :nth-child(2) > #endpoint > tp-yt-paper-item.style-scope > .title').click();
})

Given("มีช่อง Username AND Password", (keyword) => {
    cy.get('#username-input > #username').type(keyword);
})

When('มีช่อง Username Password{string}', (keyword) => {
    cy.get('#search-icon-legacy').contains("Username", "Password");
})

And("โปรดกรอกฟิลด์นี้", () => {
    cy.get(':nth-child(3) > :nth-child(3) > #dismissible > .text-wrapper > #meta > #title-wrapper > .title-and-badge > #video-title > yt-formatted-string.style-scope').click();
})

Then("ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้เเละมีrequiredว่าโปรดกรอกฟิลด์นี้", () => {

})

Given("เช็คสมัครสมาชิก", (keyword) => {
    cy.get('#username-input > #username').type(keyword);
})
When("กรอกข้อมูลในช่อง username AND password", () => {
    cy.get('#search-icon-legacy').contains("Username", "Password");
})
And("กดปุ่มเข้าสู่ระบบ", () => {
    cy.get('.style-scope > #button').click();
})
Then("ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้เเละไปที่หน้าhome", () => {
})

Given("ทดสอบออกจากระบบ", (keyword) => {
    cy.get('#Logut-input > #logout').type(keyword);
})
When("มีปุ่มออกจากระบบ", () => {
    cy.get('#search-icon-legacy').contains("ออกจากระบบ");
})
And("กดปุ่มออกจากระบบ", () => {
    cy.get('.style-scope > #button').click();
})
Then("ตรวจสอบว่าสามารถกดปุ่มออกจากระบบได้เเละไปที่หน้าhome", () => {

})

Given("ทดสอบล็อคอิน", (keyword) => {
    cy.get('#username-input > #username').type(keyword);
})
When("กรอกข้อมูลในช่อง username AND password", () => {
    cy.get('#search-icon-legacy').contains("Username", "Password");
})
And("กดปุ่มเข้าสู่ระบบ", () => {
    cy.get('.style-scope > #button').click();
})
Then("ตรวจสอบว่าสามารถกดปุ่มเข้าสู่ระบบได้เเละไปที่หน้าhome", () => {

})

