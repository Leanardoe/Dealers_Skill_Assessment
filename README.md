![Logo](/examples/pdf/images/dwc_web_header_resized.png)

# Dealers Warehouse PHP Skill Assessment

## Objective
Create a website that can submit a form to save new customers, display existing customers and generate a PDF document for review of each new customer.

## Requirements
- [x] Render an HTML form. Required fields:
	- Customer Name
	- Billing Address
	  * Address 1
	  * Address 2
	  * City
	  * State
	  * Zip
	 - Phone
	 - Fax
	 - Email
	 - Contact Person
	 - Type of Business (choose one of the following)
	   * Corporation
	   * LLC
	   * Sole Proprietor
	   * Other
	 - Description of Business
	 - Preferred Days of Receiving Shipments from Dealers Warehouse (Choose one *or* more of the following)
	   * M
	   * T
	   * W
	   * R
	   * F
	   
- [x] Submit a new customer and use PHP to save the user input to a database of your choice (MySQL, MariaDB, etc.). Assign the new customer a unique account number. 

- [x] Generate a PDF file populated with the new customer data, including a current datetime stamp and the new customer's unique account number. You may use the provided FPDF library, or any other PDF library of your choice. Save PDF document to the provided "customers" folder.
	
- [x] Display a list of all customers in the database, ordered by the most recently added customers. Provide a way to click on a new customer and view the account details.

- [x] Once complete, post your code to GitHub where it can be accessed by our reviewers. Alternatively, you may push your project to the Dealers Warehouse GitHub repository: https://github.com/Dealers-Warehouse/Dealers_Skill_Assessment
	- Provide a README.md file that explains how to set up the project locally for review

## Guidelines
- You may use any frameworks (PHP, JavaScript or CSS) or none at all
- FPDF documentation can be found here: http://www.fpdf.org/
- For examples on how to use the FPDF Class, please see examples/pdf/basic-pdf.php file
- This project is intentionally open-ended. Let this be a reflection of your coding ability and development style.

## Provided
- libraries/fdfp
- customers/
- examples/pdf/

## Technical Issues
Please contact Erik (ejohnson@dwc-k.com) or James (jwillhoite@dwc-k.com)
