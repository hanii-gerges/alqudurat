<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Power Systems
        Product::create([
            'category_id' => 2,
            'title' => 'Electric Power Generators',
            'description' => '<p>Working and sourcing different types of generators to suit any application of prime and standby.</p> <p>From 5kVA to 2.5MW power plants generators</p> <p>Including automatic transfer switch with all types and synchronizing panels to assure continuous supply of electricity to the site of operation with optimum fuel consumption and maximum hours required.</p> <p>Manufactured and assembled in Europe and Middle East to achieve optimum performance to the right budget.</p> <p><br /> &nbsp;</p>',
            ]);
            
            Product::create([
                'category_id' => 2,
                'title' => 'Engines',
                'description' => '<p>Suitable engines for different applications builds with specs of G drive, Pump and Variable speed.</p> <p>Including different types of direct, indirect coupling and sizes of SAE and flywheel.</p> <p>Global brands with guaranteed quality to maximize life spam.</p>',
            ]);
        //Drive Technology
        Product::create([
            'category_id' => 3,
            'title' => 'Digitalization in drive technology',
            'description' => '<p><strong>Drive technology is now going digital</strong></p> <p>Start in a productive future with digital drive data</p> <p>We offer you a wide range of selection and engineering tools, connectivity modules, MindSphere applications, and Edge solutions, as well as digital services to help you meaningfully evaluate this information. This enables you to use drive data in machine and plant manufacturing in order, for example, to optimize your development processes, the properties of your machines and plants or your service.</p> <p>As an operator, however, you benefit from greater stability, flexibility and efficiency in your production and manufacturing processes.</p> <p><br /> &nbsp;</p>',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Converters',
            'description' => '<p><strong>SINAMICS frequency converter</strong></p> <p>you can address each and every drive application &ndash; whether low voltage, medium voltage or DC. You can operate synchronous motors as well as induction motors according to the characteristics of the machine you are driving. Our variable frequency drives, electric motors and control systems for the variable-speed control of machines are perfectly coordinated with one another and can be very simply integrated into your existing system and automation landscape. Our frequency converters with integrated safety technology can be centrally installed and commissioned in control cabinets, mounted on walls or decentrally in distributed topologies. We have the optimum energy-saving variable frequency drives for each and every application. Whether for pumping, ventilating, moving, positioning, processing or machining. SINAMICS &ndash; simply my drive!</p> <p><br /> &nbsp;</p>',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Motors',
            'description' => '<p><strong>SIMOTICS electric motors for industry</strong></p> <p>SIMOTICS electric motors are synonymous with quality, innovation and the highest efficiency. We cover the complete range of industrial motors &ndash; synchronous as well as asynchronous: from standard electric motors through servomotors for motion control applications up to high voltage and DC motors.</p>',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Geared Motors',
            'description' => '<p>Our extensive range of geared motors ensures that you will find the optimal product for your needs.&nbsp;With the new SIMOGEAR you will benefit especially from its ability to deliver the highest level&nbsp;of flexibility due to our wide range of gear units, total adaptability and compact design.&nbsp;We also supply servo geared motors for Motion Control applications.</p>',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Gear Units',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Couplings',
            'description' => '',
        ]);

        // Building Technology
        Product::create([
            'category_id' => 4,
            'title' => 'Energy and sustainability',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Building automation and control',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'HVAC Products',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Fire safety',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Security',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Services',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Digital building lifecycle',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Data centers',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Educational facilities',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Smart hospitals',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Historical buildings and museums',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Smart hotels',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Life science',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 4,
            'title' => 'Smart office',
            'description' => '',
        ]);

        //Industrial Automation
        Product::create([
            'category_id' => 5,
            'title' => 'Automation systems',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 5,
            'title' => 'Identification and locating systems',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 5,
            'title' => 'Industrial communication',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 5,
            'title' => 'Industrial controls',
            'description' => '',
        ]);

        Product::create([
            'category_id' => 5,
            'title' => 'Digital Enterprise Services',
            'description' => '',
        ]);

        
        Product::create([
            'category_id' => 5,
            'title' => 'Operator control and monitoring systems',
            'description' => '',
            ]);
            
            Product::create([
                'category_id' => 5,
                'title' => 'PC-based automation',
                'description' => '',
                ]);
                
                Product::create([
                    'category_id' => 5,
                    'title' => 'Power supplies',
                    'description' => '',
                    ]);
                    
                    Product::create([
                        'category_id' => 5,
                        'title' => 'Process analytics',
            'description' => '',
        ]);
        
        Product::create([
            'category_id' => 5,
            'title' => 'Process control system',
            'description' => '',
            ]);
            
            Product::create([
            'category_id' => 5,
            'title' => 'Process instrumentation',
            'description' => '',
            ]);

            Product::create([
            'category_id' => 5,
            'title' => 'Products for specific requirements',
            'description' => '',
            ]);
            
            //Software
            
            Product::create([
                'category_id' => 6,
                'title' => 'Industry Software',
                'description' => '<p><strong>digitalize and integrate the entire industrial value chain</strong></p> <p>Industry Software from helps manufacturers become Digital Enterprises by enabling them to digitalize and integrate their entire industrial value chain through PLM solutions, Manufacturing Operations Management (MOM) solutions, and TIA equipment &ndash; all supported by Teamcenter, the industry-leading Collaboration Platform and single data backbone. The integration of PLM, MOM and Automation is made possible with the comprehensive suite of Industry Software.</p>',
            ]);

            Product::create([
            'category_id' => 6,
            'title' => 'MindSphere®',
            'description' => '<p>MindSphere<strong>&reg;</strong>&nbsp;is the leading industrial IoT as a service solution that uses advanced analytics and AI to power IoT solutions from the edge to the cloud.</p>',
            ]);

            Product::create([
            'category_id' => 6,
            'title' => 'Mobile Apps',
            'description' => '<p><strong>Here you&#39;ll find a selection of mobile apps for your tablet or smartphone</strong></p>',
            'content' => '<p>&nbsp;</p>

            <h4><strong>Industry Online Support</strong></h4>
            
            <p>With the Industry Online Support App you have access to more than 300,000 documents about all the Siemens Industry products - any time and anywhere, whether you have problems during the implementation of a project, need help for troubleshooting, want to expand your system or plan a new plant.<br />
            <br />
            <span style="font-size:14px"><strong>Designed for</strong>:&nbsp;iPhone, iPad, Android</span></p>
            
            <p>&nbsp;</p>
            
            <h4><strong>SIMOTICS Digital Data</strong></h4>
            
            <p>With the SIMOTICS Digital Data App - no matter where you are - you always have access to technical data, spare parts and the operating instructions for your SIMOTICS GP/SD motors. This means that we can provide you with an important part of the Digital Twin, allowing you to simplify and optimize your processes. You can obtain the electrical and mechanical data by simply scanning the data matrix code on the motor.</p>
            
            <p><span style="font-size:14px"><strong>Designed for</strong>: iPhone, iPad, Android, Windows Phone</span></p>
            
            <p>&nbsp;</p>
            
            <h4><strong>SINAMICS SELECTOR</strong></h4>
            
            <p>Siemens has developed the SINAMICS SELECTOR App as a practical tool for finding article numbers for your SINAMICS inverters in the output range from 0.12 kW to 560 kW (0.16 hp up to 700hp) quickly and easily. Whether for SINAMICS V20, SINAMICS G120C, SINAMICS G120P or SINAMICS G120: the app will provide you with the correct article numbers conveniently.</p>
            
            <p><span style="font-size:14px"><strong>Designed for:</strong>&nbsp;iPhone, iPad, Android</span></p>
            
            <p>&nbsp;</p>
            
            <h4><strong>Combi Valve Sizer</strong></h4>
            
            <p>Valve and actuator selection and sizing</p>
            
            <p>Using the Combi Valve Sizer app from Siemens, it is very easy to select the right Acvatix combi valve and matching actuator. This way, the design of energy-efficient HVAC plants becomes very straightforward: Enter or get calculated the required maximum volumetric flow, select other features such as type of threaded connection, PN class or DN size &ndash; and the ideal type of combi valve will be displayed.</p>
            
            <p>&nbsp;</p>
            
            <h4><strong>HomeControl for Room automation</strong></h4>
            
            <p>Simple control of HVAC, light, shading</p>
            
            <p>With the HomeControl app from Siemens, you have an intuitive and simple control for your heating, air conditioning and ventilation system, as well as light and shading control. The recent version contains a new and mobile operating philosophy available</p>
            
            <p>.</p>
            
            <h4><strong>Scan to HIT</strong></h4>
            
            <p>Get product information via QR</p>
            
            <p>Thanks to the Scan to HIT app you have the opportunity through a simple scan of the 2D code, which can be found on the product, to get information such as product or technical specifications. Furthermore you can download documentation as data sheets or installation instructions of the product. After a successful scan you will be redirected to HIT. HIT offers the following benefits:</p>
            
            <ul>
                <li>Access to more than hundred products</li>
                <li>Access to all documents of&nbsp; the product</li>
                <li>You can save the product to your favorites</li>
            </ul>
            
            <p>&nbsp;</p>
            
            <h4><strong>Desigo CC</strong></h4>
            
            <p>Remote access to building automation and alarm management</p>
            
            <p>Desigo CC, the integrated building management platform of Siemens, offers mobile remote access to building automation and alarm management via a native mobile app. The Desigo CC app gives building managers complete mobility.</p>
            
            <p>&nbsp;</p>
            
            <h4><strong>ABT Go</strong></h4>
            
            <p>ABT Go is the mobile tool for commissioning and maintenance tasks of Siemens devices used in building automation and control systems.</p>
            
            <p>&nbsp;</p>
            
            <h4><strong>SIMATIC Mobile Apps</strong></h4>
            
            <p>From the monitoring of distributed, mobile or expansive plants, all the way to digital maintenance tools for machines &ndash; the SIMATIC Mobile Apps can assist the user with a wide range of tasks in numerous industrial sectors. As well as providing secure access to the plant visualization, they also facilitate commissioning and maintenance tasks on site.</p>
            
            <p>&nbsp;</p>
            ',
        ]);

        //Cybersecurity
        
        //Mining
        
        //Training

    }
}
