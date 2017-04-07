<?php

class AboutController
{
    public function actionIndex()
    {
        $View = new ViewModel;
        $View->display('clothing/about/about-us.php');
    }
    public function actionContact()
    {
        // Only process POST reqeusts.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form fields and remove whitespace.
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = trim($_POST["phone"]);
            $country = trim($_POST["country"]);
            $message = trim($_POST["message"]);

            // Check that data was sent to the mailer.
            if(!UserModel::checkName($name))
                $errors[] = "Неправильное имя";
            if(!UserModel::checkEmail($email))
                $errors[] = "Неправильный емейл";
            if (empty($phone) OR empty($country) OR empty($message)) {
                // Set a 400 (bad request) response code and exit.
                http_response_code(400);
                $errors[] = "Заполните телефон, страну или сообщение!";
            }

            if(empty($errors)){
                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "support@devitems.com";

                // Set the email subject.
                $subject = "New contact from $name";

                // Build the email content.
                $email_content = "Name: $name\n";
                $email_content .= "Email: $email\n\n";
                $email_content .= "Phone: $phone\n\n";
                $email_content .= "Country: $country\n\n";
                $email_content .= "Message:\n$message\n";

                // Build the email headers.
                $email_headers = "From: $name <$email>";

                // Send the email.
                if (mail($recipient, $subject, $email_content, $email_headers)) {
                    // Set a 200 (okay) response code.
                    http_response_code(200);
                    $result = true;
                    //    echo "Thank You! Your message has been sent.";
                } else {
                    // Set a 500 (internal server error) response code.
                    http_response_code(500);
                    $errors[] = "Oops! Something went wrong and we couldn't send your message.";
                }
            }

        } else {
            // Not a POST request, set a 403 (forbidden) response code.
            http_response_code(403);
            $error[] = "There was a problem with your submission, please try again.";
        }
        $View = new ViewModel;
        $View->errors = empty($errors) ? false : $errors;
        $View->result = empty($result) ? false : true;
        $View->display('clothing/about/contact-us.php');
    }
    public function actionBlog($page = 1)
    {
        $categoryList = CategoryModel::getCategoriesList();
        $mainBlog = BlogModel::getMainBlog(5);
        $total = BlogModel::getTotalBlogs();

        $pagination = new Pagination($total['count'], $page, ProductModel::SHOW_BY_DEFAULT, 'page-');
        $View = new ViewModel;
        $View->categoryList = $categoryList;
        $View->mainBlog = $mainBlog;
        $View->pagination = $pagination;
        $View->display('clothing/about/blog.php');
    }
    public function actionBlogFull($id)
    {
        $View = new ViewModel;
        $View->display('clothing/about/blog-full.php');
    }
    public function actionBlogFullRight()
    {
        $View = new ViewModel;
        $View->display('clothing/about/blog-full-right.php');
    }
    public function actionBlogRight()
    {
        $View = new ViewModel;
        $View->display('clothing/about/blog-right.php');
    }
    public function actionSingleBlog($id)
    {
        $categoryList = CategoryModel::getCategoriesList();
        $oneBlog = BlogModel::getOneBlog($id);
        $mainBlog = BlogModel::getMainBlog(4);

        $View = new ViewModel;
        $View->categoryList = $categoryList;
        $View->mainBlog = $mainBlog;
        $View->oneBlog = $oneBlog;
        $View->display('clothing/about/single-blog.php');
    }
    public function actionSingleBlogRight()
    {
        $View = new ViewModel;
        $View->display('clothing/about/single-blog-right.php');
    }
}