<script src="/public/scripts/customAlert.js"></script>
<link href="/public/styles/alert.css" rel="stylesheet">
<?php
/* @var string $firstName*/
/* @var string $lastName*/
/* @var medicalOfficer $model*/
use App\model\users\medicalOfficer;
use App\view\components\ResponsiveComponent\FormComponent\BasicForm;
use App\view\components\ResponsiveComponent\NavbarComponent\AuthNavbar;
use App\view\components\ResponsiveComponent\Title\primaryTitle;


$background=new \App\view\components\ResponsiveComponent\ImageComponent\BackGroundImage();
$navbar= new AuthNavbar('Add Medical Officer','#','/public/images/icons/user.png');
echo AuthNavbar::getNavbarCSS();
echo $navbar;
echo $background;

// Make Form
echo BasicForm::CreateForm($model);
//echo BasicForm::CheckError($model);
echo BasicForm::CreateRow();
echo BasicForm::CreateTextInput('First_Name');
echo BasicForm::CreateTextInput('Last_Name');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::CreateTextInput('NIC');
echo BasicForm::CreateTextInput('Contact_No');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::CreateTextInput('Email');
echo BasicForm::CreateTextInput('Address1');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::CreateTextInput('Address2');
echo BasicForm::CreateTextInput('City');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::CreateSelectInput('Position', ['Medical Officer', 'Doctor', 'Nurse', 'Assistant Nurse']);
echo BasicForm::CreateDateInput('Joined_Date');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::CreateFileInput('image');
echo BasicForm::EndingRow();
echo BasicForm::CreateRow();
echo BasicForm::FormButton(BasicForm::SUBMIT_BUTTON, 'Submit');
echo BasicForm::FormButton(BasicForm::RESET_BUTTON, 'Reset');
echo BasicForm::CloseForm();
?>


<script src="/public/scripts/demo.js"></script>

