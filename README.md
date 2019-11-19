# Dealers_Skill_Assessment
## Overview
This assessment involves submitting an HTML form for a new customer to a server-side script that will process the user input and generate a PDF file populated by the user’s data. You may create any additional files necessary to complete the project.

*Provided* <br>
index.php<br>
addNewCustomer.php<br>
libraries/fdfp<br>
customers/<br>

## Time Frame
Approx 1-2 hours to complete. Please take your time. This is a reflection of your coding ability.

## Requirements
1.	The “index.php” file contains an existing form to add a new Dealers Warehouse customer. The form has the following fields:
* Customer Name
* Address
  * Address 1
  * Address 2
  * City
  * State
  * Zip
 * Phone
 * Fax
 * Email
 * Contact Person
 * Type of Business (choose one of the following)
   * Corporation
   * LLC
   * Sole Proprietor
   * Other
 * Description of Business
 * Preferred Days of Receiving Shipments from Dealers Warehouse (Choose one *or* more of the following)
   * M
   * T
   * W
   * Th
   * F
 2. On form submission, collect the user input and post the form data to the provided PHP script “addNewCustomer.php”
 3. Invalid input should cause the form submission to halt and alert the user to any problematic input. Please use both client- **and** server-side validation.
 4. If all validation checks have passed, generate a PDF document for the new customer using the FPDF Library populated with the form data. Besides the information entered by the user, the PDF document should also contain: 
     * Date and Time of form submission
     * A unique account number assigned to the new customer<br/>
 5. The PDF should look like the example given in the examples/pdf folder. 
     * New customer documents should be saved to the "customers" folder.
 6. Once complete, submit your final version of the project to Ted Cox (tcox@dwc-k.com). Alternatively, you may wish to push your work to the Dealers Warehouse GitHub repository: https://github.com/Dealers-Warehouse/Dealers_Skill_Assessment
 
## Examples
For examples on how to use the FPDF Class, please see examples/pdf/basic-pdf.php file.<br>

## Technical Issues
Please contact Erik (ejohnson@dwc-k.com) or James (jwillhoite@dwc-k.com)
  
