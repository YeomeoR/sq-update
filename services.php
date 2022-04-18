<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
  </head>
  <body>
    <div id="service-page-wrapper">
    <?php 
    include 'navbar.php';
    ?>
      <div>
  
        <h1 id="excel-title">What we excel at...</h1>
        
      </div>
       
        <div class="services-wrapper">
          <div class="service-container r1">
            <h5>
              <span>Climate Emergency and Carbon</span>
            </h5>
            <div class="service-details">
           
                <img class="icons" src="/images/iconmonstr-danger-8-48.png" alt="weather" />
                <p>
                  • We help local authorities to turn their Declarations of
                  Climate Emergency into practical actions, that have
                  stakeholder support and collaboration. <br />
                  • Find out more: We recognise the challenge of delivering
                  practical action that receives local stakeholder support. As
                  sustainability experts we have a successful track-record of
                  doing just that for leading councils including Tower Hamlets,
                  Hounslow and Hackney. <br />
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
          
            </div>
          </div>
          <div class="service-container r2">
            <h5>
              <span>Training & e-Learning</span>
            </h5>
            
            <div class="service-details">
              <div>
                <img class="icons" src="/images/iconmonstr-clipboard-11-32.png" alt="finance" />
                <p>
                  • Developing internal competence is a key part of
                  organisational resilience. We provide training ranging from 30
                  minute catch-ups, through to detailed suites and training
                  programmes over a period of months, all of which is available
                  for Board Members to Operations. <br />
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
              </div>
            </div>
          </div>
          <div class="service-container r3">
            <h5>
              <span>Net Carbon Zero</span>
            </h5>
            <div class="service-details">
         
                <img class="icons" src="/images/iconmonstr-leaf-1-48.png" alt="building" />
                <p>
                  • Does your business need to take action on Net Zero targets
                  and Carbon action, but you don't know how? We explain what the
                  most beneficial steps are for your company, and then help you
                  implement them in a practical way.
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
            
            </div>
          </div>
          <div class="service-container r1">
            <h5>
              <span>Circular Economy</span>
            </h5>

            <div class="service-details">
      
                <img class="icons" src="/images/iconmonstr-networking-7-32.png" alt="supply" />
                <p>
                  • Have you heard of 'Circular Economy' but aren't sure what it
                  means for your business? We cut through the terminology to
                  make it real for your company and implement practical actions.
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
      
            </div>
          </div>
                    <div class="service-container r2">
            <h5>
              <span>Company Sustainability Support</span>
            </h5>

            <div class="service-details">
     
                <img class="icons" src="/images/iconmonstr-link-1-32.png" alt="environmental" />
                <p>
                  • If you're unsure where to start with Sustainability and ESG,
                  or what to include in your annual report or documents to
                  clients, we can help. • Find out more: More and more clients
                  and investors are considering company sustainability
                  credentials in their decisions of who to work with, or where
                  to invest. We can help you capture and present the
                  sustainability information they're looking for in a
                  structured, concise and effective way, to reflect your company
                  at its best. <br />
                  • Governance <br />
                  • Strategy <br />
                  • Stakeholder Engagement <br />
                  • Action Plan Implementation <br />
                  • Metrics and Data <br />
                  • Reporting, Communication and Marketing
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
             
            </div>
          </div>
          <div class="service-container r3">
            <h5>
              <span>Interim Sustainability Support</span>
            </h5>
            
            <div class="service-details">
   
                <img class="icons" src="/images/iconmonstr-clipboard-11-32.png" alt="responsibility" />
                <p>
                  • If you're not quite ready to hire a full-time sustainability
                  staff member, then we can help fill the gap with flexible
                  support provided by our experts. <br />
                </p>
                <button class="contact-btn"><a href="contact.php">Contact Us</a></button>
              
            </div>
          </div>
          
          <div class="contact-pre-footer">
            <img
            id="cyber-essentials-logo"
            src="/images/Cyber Essentials Large.png"
            alt="cyber essentials"
            />
            <button class="contact-btn" id="contact-pre-footer-btn"><a href="contact.php">Contact Us</a></button>
          </div>
        </div>
        <?php  
        include 'footer.php';
        ?>
      </div>
      



    <script src="services.js"></script>
  </body>
</html>
