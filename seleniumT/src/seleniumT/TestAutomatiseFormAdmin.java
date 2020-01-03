package seleniumT;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.ie.InternetExplorerDriver;
import org.openqa.selenium.support.ui.Select;

public class TestAutomatiseFormAdmin {

	public static void main(String[] args) {
		System.setProperty("webdriver.ie.driver", "C:\\Users\\Slash\\eclipse-workspace\\seleniumT\\selinium\\IEDriverServer.exe");
		TestAutomatise();
		
	}
	public static void TestAutomatise() 
	{
		WebDriver driver = new InternetExplorerDriver();
		driver.get("http://localhost:8080/form-admin");
		driver.manage().window().maximize();;
		driver.findElement(By.id("nom")).sendKeys("bakha");
		driver.findElement(By.id("prenom")).sendKeys("issam");
		driver.findElement(By.id("adresse")).sendKeys("alger");
		driver.findElement(By.id("dateN")).sendKeys("12/17/1999");
		Select  sexe = new Select(driver.findElement(By.id("sexe")));
			sexe.selectByValue("Female");
		driver.findElement(By.id("submit")).click();
		driver.close();
		System.out.println("l'admin est inseré");
	} 	
	



}
