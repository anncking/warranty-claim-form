
require_once("./include/gatorzform.php");

$formproc = new GWarrantyForm();

//1. Add your email address here.
//You can add more than one recipients.
$formproc->AddRecipient('anncking75@gmail.com'); //<<---Put your
                                                          //email address here

//2. For better security. Get a random string from
// this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('gkEFthfv6gvGAuL');

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("https://dev-liquid.myshopify.com/pages/warranty-claim-form-submitted");
   }
}
