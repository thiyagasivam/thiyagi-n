<?php
// Bank configuration data
$bankData = [
    // Private Banks
    'hdfc-bank' => [
        'name' => 'HDFC Bank',
        'type' => 'Private Bank',
        'minRate' => 8.50,
        'maxRate' => 13.50,
        'defaultRate' => 10.00,
        'features' => [
            'Pre-approved car loans for existing customers',
            'Instant approval with minimal documentation',
            'Flexible repayment tenure up to 7 years',
            'Car as collateral reduces interest rates'
        ],
        'eligibility' => [
            'Age: 21-60 years for salaried, 25-65 for self-employed',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 6 months)',
            'Car insurance and registration',
            'Identity and address proof'
        ]
    ],
    'icici-bank' => [
        'name' => 'ICICI Bank',
        'type' => 'Private Bank',
        'minRate' => 8.75,
        'maxRate' => 13.25,
        'defaultRate' => 10.25,
        'features' => [
            'Instant digital car loans',
            'Pre-approved loans up to ₹1 crore',
            'Car as collateral secures lower rates',
            'Quick disbursal within 3 working days'
        ],
        'eligibility' => [
            'Age: 23-58 years for salaried',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 3 months)',
            'Car quotation and invoice',
            'KYC documents'
        ]
    ],
    'axis-bank' => [
        'name' => 'Axis Bank',
        'type' => 'Private Bank',
        'minRate' => 8.75,
        'maxRate' => 13.75,
        'defaultRate' => 10.50,
        'features' => [
            'Instant car loans',
            'Pre-approved offers for existing customers',
            'Flexible EMI options',
            'Used car financing available'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Latest salary slips',
            'Bank statements',
            'Car insurance policy',
            'Identity and address proof'
        ]
    ],
    'kotak-mahindra-bank' => [
        'name' => 'Kotak Mahindra Bank',
        'type' => 'Private Bank',
        'minRate' => 8.65,
        'maxRate' => 12.99,
        'defaultRate' => 10.25,
        'features' => [
            'Instant approval and disbursal',
            'Minimal documentation required',
            'Competitive car loan rates',
            'No hidden charges'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Good credit history required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'yes-bank' => [
        'name' => 'YES Bank',
        'type' => 'Private Bank',
        'minRate' => 11.50,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Quick loan approval',
            'Attractive interest rates',
            'Flexible tenure options',
            'Doorstep service available'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 6 months)',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'jammu-kashmir-bank' => [
        'name' => 'Jammu & Kashmir Bank',
        'type' => 'Private Bank',
        'minRate' => 11.75,
        'maxRate' => 20.50,
        'defaultRate' => 14.50,
        'features' => [
            'Regional banking leader',
            'Strong J&K presence',
            'Competitive interest rates',
            'Quick loan processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'catholic-syrian-bank' => [
        'name' => 'Catholic Syrian Bank',
        'type' => 'Private Bank',
        'minRate' => 12.25,
        'maxRate' => 21.00,
        'defaultRate' => 15.25,
        'features' => [
            'Kerala-based banking',
            'Personal banking focus',
            'Competitive rates',
            'Regional expertise'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    
    // Local Area Banks
    'coastal-lab' => [
        'name' => 'Coastal Local Area Bank',
        'type' => 'Local Area Bank',
        'minRate' => 12.50,
        'maxRate' => 20.00,
        'defaultRate' => 15.25,
        'features' => [
            'Regional banking expertise',
            'Local market focus',
            'Competitive interest rates',
            'Personalized service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Local area residence preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'krishna-bhima-lab' => [
        'name' => 'Krishna Bhima Samruddhi Local Area Bank',
        'type' => 'Local Area Bank',
        'minRate' => 13.00,
        'maxRate' => 21.00,
        'defaultRate' => 16.00,
        'features' => [
            'Agricultural and rural focus',
            'Quick loan processing',
            'Flexible repayment terms',
            'Local community banking'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Regional area preference'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity proof',
            'Residence proof'
        ]
    ],
    
    // Public Sector Banks
    'state-bank-of-india' => [
        'name' => 'State Bank of India (SBI)',
        'type' => 'Public Sector Bank',
        'minRate' => 11.00,
        'maxRate' => 15.25,
        'defaultRate' => 12.60,
        'features' => [
            'Xpress Credit personal loan',
            'Pre-approved loans for existing customers',
            'Competitive interest rates',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 2 years minimum',
            'Good credit score preferred'
        ],
        'documents' => [
            'Salary certificate',
            'Bank statements',
            'Income tax returns',
            'Identity and address proof'
        ]
    ],
    'punjab-national-bank' => [
        'name' => 'Punjab National Bank (PNB)',
        'type' => 'Public Sector Bank',
        'minRate' => 11.25,
        'maxRate' => 17.45,
        'defaultRate' => 13.00,
        'features' => [
            'PNB Saral personal loan',
            'Minimal documentation',
            'Quick processing',
            'Attractive interest rates'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 2 years minimum',
            'Satisfactory credit history'
        ],
        'documents' => [
            'Latest salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'bank-of-baroda' => [
        'name' => 'Bank of Baroda',
        'type' => 'Public Sector Bank',
        'minRate' => 11.90,
        'maxRate' => 19.85,
        'defaultRate' => 13.50,
        'features' => [
            'Baroda Personal Loan',
            'Easy documentation',
            'Quick approval process',
            'Flexible repayment tenure'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 2 years minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Employment proof',
            'Identity and address proof'
        ]
    ],
    
    // Small Finance Banks
    'au-small-finance-bank' => [
        'name' => 'AU Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.00,
        'maxRate' => 29.00,
        'defaultRate' => 15.00,
        'features' => [
            'Digital personal loans',
            'Quick approval and disbursal',
            'Flexible EMI options',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 22-58 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment letter',
            'KYC documents'
        ]
    ],
    'equitas-small-finance-bank' => [
        'name' => 'Equitas Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 11.99,
        'maxRate' => 30.00,
        'defaultRate' => 16.00,
        'features' => [
            'Instant personal loans',
            'Competitive interest rates',
            'Quick processing',
            'Doorstep banking services'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 2 years minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Employment proof',
            'Identity and address proof'
        ]
    ],
    'ujjivan-small-finance-bank' => [
        'name' => 'Ujjivan Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.75,
        'maxRate' => 25.00,
        'defaultRate' => 16.50,
        'features' => [
            'Personal loans for urban customers',
            'Quick approval process',
            'Flexible repayment options',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Stable employment'
        ],
        'documents' => [
            'Salary proof',
            'Bank statements',
            'Employment certificate',
            'KYC documents'
        ]
    ],
    'north-east-small-finance-bank' => [
        'name' => 'North East Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.75,
        'maxRate' => 27.00,
        'defaultRate' => 19.50,
        'features' => [
            'Northeast region focus',
            'Financial inclusion',
            'Local community banking',
            'Microfinance expertise'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'fincare-small-finance-bank' => [
        'name' => 'Fincare Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 14.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.00,
        'features' => [
            'Women-centric banking',
            'Rural and urban focus',
            'Digital banking solutions',
            'Financial literacy programs'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'poorvanchal-bank' => [
        'name' => 'Poorvanchal Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.50,
        'maxRate' => 26.50,
        'defaultRate' => 18.75,
        'features' => [
            'Regional banking',
            'Eastern India focus',
            'SME and retail banking',
            'Agricultural finance'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹16,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    
    // NBFCs
    'bajaj-finserv' => [
        'name' => 'Bajaj Finserv',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 30.00,
        'defaultRate' => 18.00,
        'features' => [
            'Instant personal loans',
            'Pre-approved offers',
            'Flexible tenure up to 5 years',
            'No collateral required'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'KYC documents',
            'Income proof',
            'Bank statements',
            'Employment verification'
        ]
    ],
    'bajaj-finance' => [
        'name' => 'Bajaj Finance',
        'type' => 'NBFC',
        'minRate' => 12.99,
        'maxRate' => 29.00,
        'defaultRate' => 17.50,
        'features' => [
            'Leading consumer finance company',
            'Digital loan approval',
            'Quick disbursement',
            'No collateral required'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 6 months)',
            'Identity and address proof',
            'Employment proof'
        ]
    ],
    'tata-capital' => [
        'name' => 'Tata Capital',
        'type' => 'NBFC',
        'minRate' => 12.50,
        'maxRate' => 21.00,
        'defaultRate' => 16.50,
        'features' => [
            'Digital loan application',
            'Quick approval and disbursal',
            'Competitive interest rates',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Employment proof'
        ]
    ],
    'mahindra-finance' => [
        'name' => 'Mahindra Finance',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 18.50,
        'features' => [
            'Quick loan processing',
            'Flexible EMI options',
            'Minimal documentation',
            'Wide branch network'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Stable employment required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment letter',
            'KYC documents'
        ]
    ],
    'mahindra-mahindra-financial' => [
        'name' => 'Mahindra & Mahindra Financial Services',
        'type' => 'NBFC',
        'minRate' => 13.75,
        'maxRate' => 24.00,
        'defaultRate' => 18.00,
        'features' => [
            'Comprehensive financial solutions',
            'Quick loan approval',
            'Flexible repayment options',
            'Strong rural and urban presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'l-t-finance' => [
        'name' => 'L&T Finance',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'Digital-first approach',
            'Quick approval process',
            'Competitive rates',
            'Hassle-free documentation'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'shriram-finance' => [
        'name' => 'Shriram Finance',
        'type' => 'NBFC',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 19.50,
        'features' => [
            'Quick loan sanctions',
            'Flexible repayment tenure',
            'Minimal documentation',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Regular income source'
        ],
        'documents' => [
            'Salary certificate',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'muthoot-finance' => [
        'name' => 'Muthoot Finance',
        'type' => 'NBFC',
        'minRate' => 16.00,
        'maxRate' => 29.00,
        'defaultRate' => 20.00,
        'features' => [
            'Gold loan against personal loan',
            'Quick processing',
            'Flexible terms',
            'Multiple branch locations'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹10,000 per month',
            'Employment: Any stable source',
            'Gold as collateral option'
        ],
        'documents' => [
            'Income proof',
            'Identity proof',
            'Address proof',
            'Gold ornaments (if applicable)'
        ]
    ],
    'muthoot-fincorp' => [
        'name' => 'Muthoot FinCorp',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 24.00,
        'defaultRate' => 17.25,
        'features' => [
            'Personal loan specialist',
            'Quick digital approval',
            'Competitive interest rates',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'jm-financial' => [
        'name' => 'JM Financial',
        'type' => 'NBFC',
        'minRate' => 11.00,
        'maxRate' => 20.00,
        'defaultRate' => 14.50,
        'features' => [
            'Leading financial services group',
            'Comprehensive loan solutions',
            'Quick approval process',
            'Competitive interest rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Identity proof',
            'Address proof',
            'Bank statements'
        ]
    ],
    'poonawalla-fincorp' => [
        'name' => 'Poonawalla Fincorp',
        'type' => 'NBFC',
        'minRate' => 11.25,
        'maxRate' => 24.00,
        'defaultRate' => 15.50,
        'features' => [
            'Leading personal loan provider',
            'Quick digital approval',
            'Flexible tenure options',
            'Competitive interest rates'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 6 months)',
            'Identity proof',
            'Address proof'
        ]
    ],
    'northern-arc-capital' => [
        'name' => 'Northern Arc Capital',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 18.50,
        'features' => [
            'Tech-enabled lending',
            'Quick loan processing',
            'Innovative financial solutions',
            'Digital-first approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'aditya-birla-finance' => [
        'name' => 'Aditya Birla Finance Limited',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 28.00,
        'defaultRate' => 18.75,
        'features' => [
            'Leading financial services',
            'Quick loan approval',
            'Flexible repayment options',
            'Digital lending platform'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'bajaj-finance-ltd' => [
        'name' => 'Bajaj Finance Ltd.',
        'type' => 'NBFC',
        'minRate' => 12.99,
        'maxRate' => 30.00,
        'defaultRate' => 17.99,
        'features' => [
            'India\'s largest NBFC',
            'Instant approval',
            'Flexible tenure options',
            'Pre-approved offers'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    'cholamandalam-investment' => [
        'name' => 'Cholamandalam Investment and Finance Company Limited',
        'type' => 'NBFC',
        'minRate' => 13.75,
        'maxRate' => 28.50,
        'defaultRate' => 19.25,
        'features' => [
            'Comprehensive financial services',
            'Quick processing',
            'Competitive interest rates',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'hdb-financial-services' => [
        'name' => 'HDB Financial Services Limited',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 29.00,
        'defaultRate' => 19.50,
        'features' => [
            'HDFC Bank subsidiary',
            'Wide branch network',
            'Digital lending solutions',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'lt-finance-limited' => [
        'name' => 'L&T Finance Limited (Formerly known as L & T Finance Holdings Limited)',
        'type' => 'NBFC',
        'minRate' => 13.25,
        'maxRate' => 27.00,
        'defaultRate' => 18.50,
        'features' => [
            'L&T Group company',
            'Infrastructure finance expertise',
            'Digital lending platform',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment certificate'
        ]
    ],
    'mahindra-mahindra-financial' => [
        'name' => 'Mahindra & Mahindra Financial Services Ltd',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 28.00,
        'defaultRate' => 19.00,
        'features' => [
            'Mahindra Group company',
            'Rural and semi-urban focus',
            'Digital lending solutions',
            'Flexible loan options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'muthoot-finance-limited' => [
        'name' => 'Muthoot Finance Limited',
        'type' => 'NBFC',
        'minRate' => 14.50,
        'maxRate' => 30.00,
        'defaultRate' => 20.00,
        'features' => [
            'Gold loan specialist',
            'Quick loan processing',
            'Nationwide presence',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'sammaan-capital-limited' => [
        'name' => 'Sammaan Capital Limited (Formerly Indiabulls Housing Finance Limited)',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 26.00,
        'defaultRate' => 17.50,
        'features' => [
            'Housing finance expertise',
            'Digital lending platform',
            'Quick approval process',
            'Competitive interest rates'
        ],
        'eligibility' => [
            'Age: 23-65 years',
            'Minimum salary: ₹35,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 720+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Property documents'
        ]
    ],
    'shriram-finance-limited' => [
        'name' => 'Shriram Finance Limited [Formerly: Shriram Transport Finance Company Limited]',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 29.00,
        'defaultRate' => 19.50,
        'features' => [
            'Commercial vehicle financing',
            'Pan-India presence',
            'Quick loan processing',
            'Flexible tenure options'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'tata-capital-limited' => [
        'name' => 'Tata Capital Limited',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 27.00,
        'defaultRate' => 18.00,
        'features' => [
            'Tata Group company',
            'Comprehensive financial services',
            'Digital lending solutions',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    'tata-sons-private' => [
        'name' => 'Tata Sons Private Limited (Formerly Tata Sons Limited)',
        'type' => 'NBFC',
        'minRate' => 12.50,
        'maxRate' => 25.00,
        'defaultRate' => 17.25,
        'features' => [
            'Tata Group holding company',
            'Premium financial services',
            'Exclusive loan products',
            'High-value lending'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income tax returns'
        ]
    ],
    '360-one-prime' => [
        'name' => '360 ONE Prime Limited (Formerly : IIFL Wealth Prime Limited and IIFL Wealth Finance Ltd)',
        'type' => 'NBFC',
        'minRate' => 12.75,
        'maxRate' => 24.00,
        'defaultRate' => 16.75,
        'features' => [
            'Wealth management expertise',
            'Premium financial services',
            'High-value loans',
            'Personalized banking'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Wealth statements'
        ]
    ],
    'power-finance-corporation' => [
        'name' => 'Power Finance Corporation (PFC)',
        'type' => 'NBFC',
        'minRate' => 10.50,
        'maxRate' => 18.00,
        'defaultRate' => 13.75,
        'features' => [
            'Power sector financier',
            'Government-backed NBFC',
            'Infrastructure financing',
            'Long-term loans'
        ],
        'eligibility' => [
            'Age: 23-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment certificate'
        ]
    ],
    'rec-limited' => [
        'name' => 'REC Limited',
        'type' => 'NBFC',
        'minRate' => 10.75,
        'maxRate' => 18.50,
        'defaultRate' => 14.00,
        'features' => [
            'Power sector NBFC',
            'Renewable energy focus',
            'Government backing',
            'Infrastructure loans'
        ],
        'eligibility' => [
            'Age: 23-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    'indian-railway-finance-corp' => [
        'name' => 'Indian Railway Finance Corporation (IRFC)',
        'type' => 'NBFC',
        'minRate' => 10.00,
        'maxRate' => 16.00,
        'defaultRate' => 12.50,
        'features' => [
            'Railway infrastructure financing',
            'Government-owned NBFC',
            'Specialized lending',
            'Long tenure loans'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment certificate'
        ]
    ],
    'hudco' => [
        'name' => 'Housing and Urban Development Corporation (HUDCO)',
        'type' => 'NBFC',
        'minRate' => 9.50,
        'maxRate' => 15.00,
        'defaultRate' => 11.75,
        'features' => [
            'Housing finance specialist',
            'Urban development focus',
            'Government backing',
            'Affordable housing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹40,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'KYC documents'
        ]
    ],
    'canfin-homes' => [
        'name' => 'Canfin Homes',
        'type' => 'NBFC',
        'minRate' => 11.00,
        'maxRate' => 17.50,
        'defaultRate' => 13.25,
        'features' => [
            'Canara Bank subsidiary',
            'Housing finance focus',
            'Competitive rates',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'Identity proof'
        ]
    ],
    'dewan-housing-finance' => [
        'name' => 'Dewan Housing Finance',
        'type' => 'NBFC',
        'minRate' => 12.50,
        'maxRate' => 20.00,
        'defaultRate' => 15.25,
        'features' => [
            'Housing finance company',
            'Retail and commercial lending',
            'Flexible repayment options',
            'Quick approval'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'KYC documents'
        ]
    ],
    'indiabulls-commercial-credit' => [
        'name' => 'Indiabulls Commercial Credit',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 22.00,
        'defaultRate' => 16.75,
        'features' => [
            'Commercial lending focus',
            'Business loans specialist',
            'Quick processing',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Business documents',
            'KYC documents'
        ]
    ],
    'reliance-home-finance' => [
        'name' => 'Reliance Home Finance',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 14.75,
        'features' => [
            'Anil Dhirubhai Ambani Group',
            'Housing finance specialist',
            'Affordable housing focus',
            'Digital processes'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'Identity proof'
        ]
    ],
    
    // Fintech Companies
    'payme-india' => [
        'name' => 'PayMe India',
        'type' => 'Fintech',
        'minRate' => 14.00,
        'maxRate' => 35.00,
        'defaultRate' => 22.00,
        'features' => [
            'Instant digital loans',
            'AI-powered credit assessment',
            'Paperless process',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-45 years',
            'Minimum salary: ₹20,000 per month',
            'Credit score: 650+ required',
            'Digital footprint verification'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Aadhaar and PAN'
        ]
    ],
    'kreditbee' => [
        'name' => 'KreditBee',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 32.00,
        'defaultRate' => 23.00,
        'features' => [
            'App-based loans',
            'Instant approval',
            'No paperwork',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 22-55 years',
            'Minimum salary: ₹15,000 per month',
            'Credit score: 600+ required',
            'Smartphone with internet'
        ],
        'documents' => [
            'Aadhaar card',
            'PAN card',
            'Bank statements',
            'Salary certificate'
        ]
    ],
    'moneytap' => [
        'name' => 'MoneyTap',
        'type' => 'Fintech',
        'minRate' => 13.00,
        'maxRate' => 36.00,
        'defaultRate' => 20.00,
        'features' => [
            'Personal line of credit',
            'Use money as needed',
            'Pay interest only on used amount',
            'Instant approval'
        ],
        'eligibility' => [
            'Age: 23-57 years',
            'Minimum salary: ₹30,000 per month',
            'Credit score: 750+ preferred',
            'Stable employment'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Employment verification',
            'KYC documents'
        ]
    ],
    'cashe' => [
        'name' => 'CASHe',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 35.00,
        'defaultRate' => 24.00,
        'features' => [
            'Social loan network',
            'AI-based credit scoring',
            'Quick disbursal',
            'Mobile-first experience'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹20,000 per month',
            'Credit score: 650+ required',
            'Social media presence'
        ],
        'documents' => [
            'Digital KYC',
            'Income proof',
            'Bank statements',
            'Social verification'
        ]
    ],
    'navi-loans' => [
        'name' => 'Navi',
        'type' => 'Fintech',
        'minRate' => 10.99,
        'maxRate' => 25.00,
        'defaultRate' => 16.50,
        'features' => [
            'Sachin Bansal\'s fintech',
            'AI-powered lending',
            'Quick approval process',
            'Digital-first approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'PAN card',
            'Aadhaar card',
            'Bank statements',
            'Salary slips'
        ]
    ],
    'cred-loans' => [
        'name' => 'CRED',
        'type' => 'Fintech',
        'minRate' => 11.50,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'Premium members only',
            'Credit card bill based',
            'Instant approval',
            'Reward points system'
        ],
        'eligibility' => [
            'Age: 23-60 years',
            'Minimum salary: ₹30,000 per month',
            'Credit score: 750+ required',
            'CRED member required'
        ],
        'documents' => [
            'Credit card statements',
            'Income proof',
            'Bank statements',
            'KYC documents'
        ]
    ],
    'dhani-loans' => [
        'name' => 'Dhani',
        'type' => 'Fintech',
        'minRate' => 12.00,
        'maxRate' => 30.00,
        'defaultRate' => 18.50,
        'features' => [
            'Indiabulls fintech arm',
            'Quick digital loans',
            'Flexible repayment',
            'Instant disbursal'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'lazypay-loans' => [
        'name' => 'LazyPay',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 36.00,
        'defaultRate' => 24.00,
        'features' => [
            'PayU lending platform',
            'Buy now pay later',
            'Credit line facility',
            'Instant approval'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'PAN card',
            'Bank statements',
            'Mobile verification',
            'Income proof'
        ]
    ],
    'slice-fintech' => [
        'name' => 'Slice',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 30.00,
        'defaultRate' => 20.00,
        'features' => [
            'Credit card for millennials',
            'UPI-enabled card',
            'Reward points',
            'Digital lending'
        ],
        'eligibility' => [
            'Age: 18-35 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'PAN card',
            'Aadhaar card',
            'Bank statements',
            'Salary slips'
        ]
    ],
    'rupeek-loans' => [
        'name' => 'Rupeek',
        'type' => 'Fintech',
        'minRate' => 14.00,
        'maxRate' => 24.00,
        'defaultRate' => 18.00,
        'features' => [
            'Gold loan fintech',
            'Digital gold loans',
            'Quick processing',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Gold as collateral required',
            'Minimum income: ₹10,000 per month',
            'Basic KYC required'
        ],
        'documents' => [
            'Identity proof',
            'Address proof',
            'Gold jewelry',
            'Income proof'
        ]
    ],
    'faircent-loans' => [
        'name' => 'FairCent',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.50,
        'features' => [
            'P2P lending platform',
            'Direct borrower-lender',
            'Technology-driven',
            'Transparent pricing'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment verification'
        ]
    ],
    'upwards-fintech' => [
        'name' => 'Upwards',
        'type' => 'Fintech',
        'minRate' => 19.00,
        'maxRate' => 35.00,
        'defaultRate' => 24.00,
        'features' => [
            'Salary advance platform',
            'Early salary access',
            'Quick approval',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment letter',
            'KYC documents'
        ]
    ],
    'zest-money' => [
        'name' => 'ZestMoney',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.00,
        'features' => [
            'BNPL and personal loans',
            'AI-powered credit scoring',
            'EMI conversion services',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'PAN card',
            'Aadhaar card',
            'Bank statements',
            'Salary slips'
        ]
    ],
    'true-balance' => [
        'name' => 'True Balance',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 32.00,
        'defaultRate' => 23.00,
        'features' => [
            'Popular fintech app',
            'Mobile recharge and loans',
            'Instant loan approval',
            'Digital-first platform'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Mobile verification',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'branch-fintech' => [
        'name' => 'Branch',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 36.00,
        'defaultRate' => 25.00,
        'features' => [
            'Digital lending platform',
            'Mobile-first approach',
            'Quick disbursal',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 18-55 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 3 months minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Mobile verification',
            'Bank statements',
            'Identity proof',
            'Employment proof'
        ]
    ],
    'loantap' => [
        'name' => 'LoanTap',
        'type' => 'Fintech',
        'minRate' => 13.00,
        'maxRate' => 30.00,
        'defaultRate' => 19.50,
        'features' => [
            'Personal and business loans',
            'Professional-focused lending',
            'Quick processing',
            'Flexible tenure'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Professional documents',
            'KYC documents'
        ]
    ],
    'incred' => [
        'name' => 'InCred',
        'type' => 'Fintech',
        'minRate' => 12.00,
        'maxRate' => 28.00,
        'defaultRate' => 18.00,
        'features' => [
            'Education and personal loans',
            'Student-focused lending',
            'Career-based underwriting',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Educational certificates',
            'Salary slips',
            'Bank statements',
            'Identity proof'
        ]
    ],
    'money-view' => [
        'name' => 'Money View',
        'type' => 'Fintech',
        'minRate' => 14.00,
        'maxRate' => 32.00,
        'defaultRate' => 21.00,
        'features' => [
            'Personal finance app',
            'Instant loan approval',
            'Credit score tracking',
            'Financial planning tools'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'paysense' => [
        'name' => 'PaySense',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 35.00,
        'defaultRate' => 22.50,
        'features' => [
            'Instant personal loans',
            'Digital-only process',
            'Quick disbursal',
            'Flexible EMI options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Employment verification'
        ]
    ],
    'mobikwik-lending' => [
        'name' => 'Mobikwik Lending',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 30.00,
        'defaultRate' => 21.50,
        'features' => [
            'Mobikwik wallet integration',
            'Digital loans',
            'Quick approval',
            'Mobile-first platform'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Mobikwik user preferred'
        ],
        'documents' => [
            'Mobikwik account',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'ziploan' => [
        'name' => 'ZipLoan',
        'type' => 'Fintech',
        'minRate' => 17.00,
        'maxRate' => 32.00,
        'defaultRate' => 23.00,
        'features' => [
            'MSME and personal lending',
            'Quick processing',
            'Minimal documentation',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Business documents',
            'KYC documents'
        ]
    ],
    'flexiloans' => [
        'name' => 'FlexiLoans',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.50,
        'features' => [
            'Business and personal loans',
            'Flexible loan products',
            'Quick approval',
            'Digital platform'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Business documents',
            'Identity proof'
        ]
    ],
    'neogrowth' => [
        'name' => 'NeoGrowth',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 33.00,
        'defaultRate' => 24.00,
        'features' => [
            'Merchant cash advance',
            'Point-of-sale financing',
            'Quick funding',
            'Business-focused loans'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year minimum',
            'Monthly turnover: ₹50,000+',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Business documents',
            'Bank statements',
            'Sales records',
            'KYC documents'
        ]
    ],
    'ugro-capital' => [
        'name' => 'U GRO Capital',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 29.00,
        'defaultRate' => 21.50,
        'features' => [
            'MSME focused lending',
            'Technology-driven platform',
            'Flexible loan products',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 2 years minimum',
            'Annual turnover: ₹10 lakhs+',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Business documents',
            'Financial statements',
            'Bank statements',
            'KYC documents'
        ]
    ],
    'tala-india' => [
        'name' => 'Tala',
        'type' => 'Fintech',
        'minRate' => 20.00,
        'maxRate' => 36.00,
        'defaultRate' => 26.00,
        'features' => [
            'AI-powered credit assessment',
            'International fintech platform',
            'Mobile-first lending',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹10,000 per month',
            'Work experience: 3 months minimum',
            'Credit score: 550+ acceptable'
        ],
        'documents' => [
            'Mobile verification',
            'Bank statements',
            'Income proof',
            'Identity documents'
        ]
    ],
    'lenddo-efl' => [
        'name' => 'Lenddo/EFL',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 35.00,
        'defaultRate' => 24.50,
        'features' => [
            'AI-powered credit scoring',
            'Alternative data analysis',
            'Digital lending platform',
            'Risk assessment technology'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ preferred'
        ],
        'documents' => [
            'Digital footprint analysis',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'fibe-money' => [
        'name' => 'Fibe',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 36.00,
        'defaultRate' => 25.00,
        'features' => [
            'Rebranded EarlySalary',
            'Salary advance loans',
            'Digital-only platform',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 3 months minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment verification',
            'KYC documents'
        ]
    ],
    'jupiter-money' => [
        'name' => 'Jupiter',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 30.00,
        'defaultRate' => 21.00,
        'features' => [
            'Digital banking platform',
            'Personal finance management',
            'Credit and lending services',
            'Modern banking experience'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment letter',
            'Identity proof'
        ]
    ],
    'fi-money' => [
        'name' => 'Fi Money',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 32.00,
        'defaultRate' => 22.00,
        'features' => [
            'Personal finance app',
            'Smart savings and lending',
            'Financial wellness platform',
            'Automated financial planning'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment verification',
            'Financial documents'
        ]
    ],
    'uni-fintech' => [
        'name' => 'Uni',
        'type' => 'Fintech',
        'minRate' => 17.00,
        'maxRate' => 33.00,
        'defaultRate' => 23.00,
        'features' => [
            'Pay-later credit platform',
            'Credit card alternatives',
            'Flexible payment options',
            'Reward-based system'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'simpl-fintech' => [
        'name' => 'Simpl',
        'type' => 'Fintech',
        'minRate' => 19.00,
        'maxRate' => 36.00,
        'defaultRate' => 25.50,
        'features' => [
            'Pay-later fintech platform',
            'Merchant network integration',
            'One-click checkout',
            'Credit line management'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Mobile verification',
            'Identity documents'
        ]
    ],
    'okcredit' => [
        'name' => 'OkCredit',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.50,
        'features' => [
            'Business lending platform',
            'Digital ledger integration',
            'SME focused loans',
            'Business credit solutions'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year minimum',
            'Monthly turnover: ₹25,000+',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Business documents',
            'Bank statements',
            'Sales records',
            'KYC documents'
        ]
    ],
    'groww-credit' => [
        'name' => 'Groww Credit',
        'type' => 'Fintech',
        'minRate' => 14.00,
        'maxRate' => 28.00,
        'defaultRate' => 19.50,
        'features' => [
            'Investment-linked lending',
            'Portfolio-based credit',
            'Competitive interest rates',
            'Investment platform integration'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Investment portfolio required',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Investment statements',
            'Salary slips',
            'Bank statements',
            'Portfolio documents'
        ]
    ],
    'zomato-pay-later' => [
        'name' => 'Zomato Pay Later',
        'type' => 'Fintech',
        'minRate' => 20.00,
        'maxRate' => 36.00,
        'defaultRate' => 26.00,
        'features' => [
            'Food delivery linked credit',
            'Pay-later for food orders',
            'Zomato app integration',
            'Instant credit approval'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Zomato user history required',
            'Minimum orders: 10+ monthly',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Zomato account verification',
            'Bank statements',
            'Income proof',
            'Mobile verification'
        ]
    ],
    'amazon-pay-later' => [
        'name' => 'Amazon Pay Later',
        'type' => 'Fintech',
        'minRate' => 18.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.50,
        'features' => [
            'E-commerce linked credit',
            'Amazon shopping integration',
            'Pay-later services',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Amazon Prime member preferred',
            'Regular Amazon shopper',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Amazon account verification',
            'Bank statements',
            'Income proof',
            'Purchase history'
        ]
    ],
    'flipkart-pay-later' => [
        'name' => 'Flipkart Pay Later',
        'type' => 'Fintech',
        'minRate' => 19.00,
        'maxRate' => 32.00,
        'defaultRate' => 23.50,
        'features' => [
            'E-commerce credit solutions',
            'Flipkart shopping integration',
            'Instant credit approval',
            'EMI conversion options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Flipkart Plus member preferred',
            'Regular shopping history',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Flipkart account verification',
            'Bank statements',
            'Income proof',
            'Shopping history'
        ]
    ],
    'payu-credit' => [
        'name' => 'PayU Credit',
        'type' => 'Fintech',
        'minRate' => 16.00,
        'maxRate' => 29.00,
        'defaultRate' => 21.00,
        'features' => [
            'Payment gateway linked lending',
            'Merchant financing solutions',
            'LazyPay integration',
            'Digital payment platform'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Payment history',
            'KYC documents'
        ]
    ],
    'razorpay-capital' => [
        'name' => 'Razorpay Capital',
        'type' => 'Fintech',
        'minRate' => 15.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.50,
        'features' => [
            'Business lending solutions',
            'Razorpay merchant integration',
            'Working capital loans',
            'Revenue-based financing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Razorpay merchant account',
            'Business vintage: 1 year minimum',
            'Monthly transactions: ₹1 lakh+'
        ],
        'documents' => [
            'Razorpay transaction history',
            'Business documents',
            'Bank statements',
            'Financial statements'
        ]
    ],
    
    // Additional Private Banks
    'bandhan-bank' => [
        'name' => 'Bandhan Bank',
        'type' => 'Private Bank',
        'minRate' => 12.00,
        'maxRate' => 23.00,
        'defaultRate' => 15.00,
        'features' => [
            'Competitive interest rates',
            'Quick processing',
            'Flexible tenure options',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'csb-bank' => [
        'name' => 'CSB Bank',
        'type' => 'Private Bank',
        'minRate' => 11.75,
        'maxRate' => 21.00,
        'defaultRate' => 14.50,
        'features' => [
            'Competitive rates',
            'Quick approval',
            'Flexible repayment',
            'Online application'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'city-union-bank' => [
        'name' => 'City Union Bank',
        'type' => 'Private Bank',
        'minRate' => 12.50,
        'maxRate' => 22.00,
        'defaultRate' => 15.50,
        'features' => [
            'Competitive interest rates',
            'Quick processing',
            'Flexible tenure',
            'Easy documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income proof'
        ]
    ],
    'dcb-bank' => [
        'name' => 'DCB Bank',
        'type' => 'Private Bank',
        'minRate' => 13.00,
        'maxRate' => 24.00,
        'defaultRate' => 16.00,
        'features' => [
            'Quick approval',
            'Minimal documentation',
            'Flexible repayment',
            'Digital processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'dhanlaxmi-bank' => [
        'name' => 'Dhanlaxmi Bank',
        'type' => 'Private Bank',
        'minRate' => 12.75,
        'maxRate' => 23.50,
        'defaultRate' => 16.50,
        'features' => [
            'Competitive rates',
            'Quick processing',
            'Flexible tenure options',
            'Easy application'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'federal-bank' => [
        'name' => 'Federal Bank',
        'type' => 'Private Bank',
        'minRate' => 11.50,
        'maxRate' => 20.00,
        'defaultRate' => 14.00,
        'features' => [
            'Attractive interest rates',
            'Quick approval process',
            'Flexible repayment options',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years for salaried',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements (last 6 months)',
            'Form 16 or ITR',
            'Identity and address proof'
        ]
    ],
    'indusind-bank' => [
        'name' => 'IndusInd Bank',
        'type' => 'Private Bank',
        'minRate' => 11.25,
        'maxRate' => 22.00,
        'defaultRate' => 14.50,
        'features' => [
            'Competitive interest rates',
            'Quick processing',
            'Flexible tenure up to 5 years',
            'Pre-approved offers'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'idfc-first-bank' => [
        'name' => 'IDFC FIRST Bank',
        'type' => 'Private Bank',
        'minRate' => 10.75,
        'maxRate' => 19.50,
        'defaultRate' => 13.50,
        'features' => [
            'Attractive interest rates',
            'Digital-first approach',
            'Quick approval',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'karnataka-bank' => [
        'name' => 'Karnataka Bank',
        'type' => 'Private Bank',
        'minRate' => 12.00,
        'maxRate' => 21.50,
        'defaultRate' => 15.00,
        'features' => [
            'Competitive rates',
            'Regional presence',
            'Quick processing',
            'Flexible options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'karur-vysya-bank' => [
        'name' => 'Karur Vysya Bank',
        'type' => 'Private Bank',
        'minRate' => 12.25,
        'maxRate' => 22.50,
        'defaultRate' => 15.50,
        'features' => [
            'Competitive interest rates',
            'Quick approval',
            'Flexible tenure',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'nainital-bank' => [
        'name' => 'Nainital Bank',
        'type' => 'Private Bank',
        'minRate' => 13.00,
        'maxRate' => 24.00,
        'defaultRate' => 16.50,
        'features' => [
            'Regional expertise',
            'Quick processing',
            'Flexible options',
            'Personal service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'rbl-bank' => [
        'name' => 'RBL Bank',
        'type' => 'Private Bank',
        'minRate' => 12.50,
        'maxRate' => 25.00,
        'defaultRate' => 16.00,
        'features' => [
            'Digital-first banking',
            'Quick approval',
            'Flexible tenure',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'south-indian-bank' => [
        'name' => 'South Indian Bank',
        'type' => 'Private Bank',
        'minRate' => 12.75,
        'maxRate' => 23.00,
        'defaultRate' => 16.00,
        'features' => [
            'Regional presence',
            'Quick processing',
            'Flexible repayment',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income proof'
        ]
    ],
    'tamilnad-mercantile-bank' => [
        'name' => 'Tamilnad Mercantile Bank',
        'type' => 'Private Bank',
        'minRate' => 13.50,
        'maxRate' => 24.50,
        'defaultRate' => 17.00,
        'features' => [
            'Regional expertise',
            'Quick approval',
            'Flexible options',
            'Personal service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'idbi-bank' => [
        'name' => 'IDBI Bank',
        'type' => 'Private Bank',
        'minRate' => 11.50,
        'maxRate' => 20.50,
        'defaultRate' => 14.50,
        'features' => [
            'Competitive rates',
            'Quick processing',
            'Flexible tenure',
            'Easy documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'jammu-kashmir-bank' => [
        'name' => 'Jammu & Kashmir Bank',
        'type' => 'Private Bank',
        'minRate' => 11.75,
        'maxRate' => 21.00,
        'defaultRate' => 14.25,
        'features' => [
            'Regional expertise in J&K',
            'Competitive interest rates',
            'Quick loan processing',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'saraswat-cooperative-bank' => [
        'name' => 'Saraswat Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 12.25,
        'maxRate' => 22.00,
        'defaultRate' => 15.50,
        'features' => [
            'Cooperative banking expertise',
            'Competitive interest rates',
            'Quick loan processing',
            'Member-focused services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Membership proof',
            'KYC documents'
        ]
    ],
    'nkgsb-cooperative-bank' => [
        'name' => 'NKGSB Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 12.50,
        'maxRate' => 21.00,
        'defaultRate' => 15.75,
        'features' => [
            'Mumbai-based cooperative bank',
            'Strong local presence',
            'Member benefits',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Membership documents',
            'KYC documents'
        ]
    ],
    'cosmos-cooperative-bank' => [
        'name' => 'Cosmos Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 12.75,
        'maxRate' => 22.50,
        'defaultRate' => 16.00,
        'features' => [
            'Pune-based cooperative bank',
            'Regional expertise',
            'Member-centric services',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ acceptable'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Membership proof',
            'Identity proof'
        ]
    ],
    'abhyudaya-cooperative-bank' => [
        'name' => 'Abhyudaya Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 13.00,
        'maxRate' => 23.00,
        'defaultRate' => 16.50,
        'features' => [
            'Mumbai-based cooperative bank',
            'Community banking',
            'Flexible loan terms',
            'Member benefits'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Membership documents',
            'KYC documents'
        ]
    ],
    
    // Additional Public Sector Banks
    'bank-of-india' => [
        'name' => 'Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 12.00,
        'maxRate' => 18.50,
        'defaultRate' => 14.00,
        'features' => [
            'Government backing',
            'Competitive rates',
            'Wide network',
            'Trusted brand'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'bank-of-maharashtra' => [
        'name' => 'Bank of Maharashtra',
        'type' => 'Public Sector Bank',
        'minRate' => 12.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.50,
        'features' => [
            'Government backing',
            'Regional presence',
            'Competitive rates',
            'Reliable service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'canara-bank' => [
        'name' => 'Canara Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 11.75,
        'maxRate' => 18.75,
        'defaultRate' => 13.75,
        'features' => [
            'Government backing',
            'Wide network',
            'Competitive rates',
            'Trusted service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'central-bank-of-india' => [
        'name' => 'Central Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 12.25,
        'maxRate' => 19.25,
        'defaultRate' => 14.25,
        'features' => [
            'Government backing',
            'Pan-India presence',
            'Competitive rates',
            'Reliable service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'indian-bank' => [
        'name' => 'Indian Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 11.50,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Government backing',
            'Wide network',
            'Competitive rates',
            'Trusted brand'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'indian-overseas-bank' => [
        'name' => 'Indian Overseas Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 12.00,
        'maxRate' => 19.00,
        'defaultRate' => 14.00,
        'features' => [
            'Government backing',
            'International presence',
            'Competitive rates',
            'Reliable service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'punjab-sind-bank' => [
        'name' => 'Punjab & Sind Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 12.75,
        'maxRate' => 20.00,
        'defaultRate' => 15.00,
        'features' => [
            'Government backing',
            'Regional presence',
            'Competitive rates',
            'Personal service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'uco-bank' => [
        'name' => 'UCO Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 12.50,
        'maxRate' => 19.50,
        'defaultRate' => 14.50,
        'features' => [
            'Government backing',
            'Wide network',
            'Competitive rates',
            'Trusted service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'union-bank-of-india' => [
        'name' => 'Union Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 11.80,
        'maxRate' => 18.50,
        'defaultRate' => 13.80,
        'features' => [
            'Government backing',
            'Pan-India network',
            'Competitive rates',
            'Reliable service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    
    // Additional Small Finance Banks
    'capital-small-finance-bank' => [
        'name' => 'Capital Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.50,
        'maxRate' => 28.00,
        'defaultRate' => 18.00,
        'features' => [
            'Focus on underserved segments',
            'Quick approval',
            'Flexible criteria',
            'Digital processes'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'esaf-small-finance-bank' => [
        'name' => 'ESAF Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 18.50,
        'features' => [
            'Microfinance expertise',
            'Quick processing',
            'Flexible terms',
            'Easy documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹10,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'suryoday-small-finance-bank' => [
        'name' => 'Suryoday Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.25,
        'maxRate' => 27.00,
        'defaultRate' => 17.50,
        'features' => [
            'Customer-centric approach',
            'Quick approval',
            'Flexible repayment',
            'Digital banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'utkarsh-small-finance-bank' => [
        'name' => 'Utkarsh Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 14.50,
        'maxRate' => 29.00,
        'defaultRate' => 19.00,
        'features' => [
            'Inclusive banking',
            'Quick processing',
            'Flexible criteria',
            'Rural focus'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹10,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'jana-small-finance-bank' => [
        'name' => 'Jana Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.75,
        'maxRate' => 28.50,
        'defaultRate' => 18.50,
        'features' => [
            'Microfinance background',
            'Quick approval',
            'Flexible terms',
            'Technology-driven'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income proof'
        ]
    ],
    'slice-small-finance-bank' => [
        'name' => 'slice Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.50,
        'maxRate' => 27.00,
        'defaultRate' => 18.25,
        'features' => [
            'Digital-first banking',
            'Tech-enabled solutions',
            'Quick loan approval',
            'Innovative financial products'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'shivalik-small-finance-bank' => [
        'name' => 'Shivalik Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 14.25,
        'maxRate' => 27.50,
        'defaultRate' => 18.75,
        'features' => [
            'Regional expertise',
            'Quick processing',
            'Flexible options',
            'Personal service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Address proof'
        ]
    ],
    'unity-small-finance-bank' => [
        'name' => 'Unity Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.90,
        'maxRate' => 26.50,
        'defaultRate' => 18.25,
        'features' => [
            'Customer-focused',
            'Quick approval',
            'Flexible repayment',
            'Digital solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income proof'
        ]
    ],
    
    // Additional NBFCs
    'indiabulls-housing-finance' => [
        'name' => 'Indiabulls Housing Finance',
        'type' => 'NBFC',
        'minRate' => 14.50,
        'maxRate' => 25.00,
        'defaultRate' => 18.00,
        'features' => [
            'Quick approval',
            'Flexible criteria',
            'Digital processes',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'pnb-housing-finance' => [
        'name' => 'PNB Housing Finance',
        'type' => 'NBFC',
        'minRate' => 13.75,
        'maxRate' => 22.50,
        'defaultRate' => 17.00,
        'features' => [
            'Bank backing',
            'Quick processing',
            'Competitive rates',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'hdfc-ltd' => [
        'name' => 'HDFC Ltd',
        'type' => 'NBFC',
        'minRate' => 12.25,
        'maxRate' => 20.50,
        'defaultRate' => 15.50,
        'features' => [
            'Established brand',
            'Competitive rates',
            'Quick approval',
            'Wide network'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'Identity proof'
        ]
    ],
    'hdb-financial-services' => [
        'name' => 'HDB Financial Services',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 22.00,
        'defaultRate' => 15.25,
        'features' => [
            'HDFC Bank subsidiary',
            'Quick digital approval',
            'Competitive interest rates',
            'Strong bank backing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'lic-housing-finance' => [
        'name' => 'LIC Housing Finance',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 21.75,
        'defaultRate' => 16.00,
        'features' => [
            'LIC backing',
            'Trusted brand',
            'Competitive rates',
            'Wide presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'repco-home-finance' => [
        'name' => 'Repco Home Finance',
        'type' => 'NBFC',
        'minRate' => 13.25,
        'maxRate' => 22.00,
        'defaultRate' => 16.25,
        'features' => [
            'Housing finance specialist',
            'Quick loan approval',
            'Competitive interest rates',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'KYC documents'
        ]
    ],
    'reliance-capital' => [
        'name' => 'Reliance Capital',
        'type' => 'NBFC',
        'minRate' => 13.25,
        'maxRate' => 24.00,
        'defaultRate' => 17.25,
        'features' => [
            'Reliance group backing',
            'Quick loan approval',
            'Competitive interest rates',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'sundaram-finance' => [
        'name' => 'Sundaram Finance',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.00,
        'features' => [
            'Established NBFC brand',
            'Quick processing',
            'Flexible loan terms',
            'Wide branch network'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'manappuram-finance' => [
        'name' => 'Manappuram Finance',
        'type' => 'NBFC',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 19.50,
        'features' => [
            'Gold loan specialist',
            'Quick loan disbursal',
            'Minimal documentation',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Gold ornaments as collateral',
            'Minimum gold value: ₹5,000',
            'Valid identity proof'
        ],
        'documents' => [
            'Gold ornaments',
            'Identity proof',
            'Address proof',
            'Income proof (if required)'
        ]
    ],
    'idfc-financial-services' => [
        'name' => 'IDFC Financial Services',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 23.00,
        'defaultRate' => 16.75,
        'features' => [
            'Digital-first approach',
            'Quick loan approval',
            'Competitive rates',
            'Hassle-free documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Employment proof'
        ]
    ],
    
    // Additional Fintech Companies
    'earlysalary' => [
        'name' => 'EarlySalary',
        'type' => 'Fintech Company',
        'minRate' => 20.00,
        'maxRate' => 36.00,
        'defaultRate' => 26.00,
        'features' => [
            'Instant approval',
            'Salary advance',
            'Digital KYC',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 3 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Employment proof'
        ]
    ],
    'flexsalary' => [
        'name' => 'FlexSalary',
        'type' => 'Fintech Company',
        'minRate' => 19.00,
        'maxRate' => 35.00,
        'defaultRate' => 25.00,
        'features' => [
            'Flexible repayment',
            'Instant approval',
            'Digital process',
            'Quick loans'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 3 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary proof',
            'Identity documents'
        ]
    ],
    'kissht' => [
        'name' => 'Kissht',
        'type' => 'Fintech Company',
        'minRate' => 16.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.00,
        'features' => [
            'EMI financing',
            'Instant approval',
            'Digital platform',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Employment proof'
        ]
    ],
    'lendingkart' => [
        'name' => 'LendingKart',
        'type' => 'Fintech Company',
        'minRate' => 18.00,
        'maxRate' => 32.00,
        'defaultRate' => 24.00,
        'features' => [
            'Business loans focus',
            'Quick approval',
            'Digital process',
            'Flexible criteria'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Business experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income proof',
            'Business documents'
        ]
    ],
    'capital-float' => [
        'name' => 'Capital Float',
        'type' => 'Fintech Company',
        'minRate' => 17.00,
        'maxRate' => 28.00,
        'defaultRate' => 21.00,
        'features' => [
            'Working capital loans',
            'Quick processing',
            'Digital platform',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹30,000 per month',
            'Business experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Financial documents',
            'Business proof'
        ]
    ],
    'upwards' => [
        'name' => 'Upwards',
        'type' => 'Fintech Company',
        'minRate' => 16.00,
        'maxRate' => 30.00,
        'defaultRate' => 21.00,
        'features' => [
            'Digital personal loans',
            'Quick approval process',
            'Flexible repayment options',
            'Paperless documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Credit score: 700+ preferred',
            'Stable employment'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Employment verification'
        ]
    ],
    'slice' => [
        'name' => 'Slice',
        'type' => 'Fintech Company',
        'minRate' => 18.00,
        'maxRate' => 36.00,
        'defaultRate' => 24.00,
        'features' => [
            'Pay later solutions',
            'Credit line facility',
            'Instant approval',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹20,000 per month',
            'Credit score: 650+ required',
            'Digital verification'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income proof',
            'Aadhaar and PAN'
        ]
    ],
    'cred' => [
        'name' => 'CRED',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 28.00,
        'defaultRate' => 18.00,
        'features' => [
            'Credit line for creditworthy customers',
            'Instant approval',
            'Reward-based system',
            'Premium user experience'
        ],
        'eligibility' => [
            'Age: 23-60 years',
            'Minimum salary: ₹30,000 per month',
            'Credit score: 750+ required',
            'Good credit history'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Credit card statements'
        ]
    ],
    'dhani' => [
        'name' => 'Dhani',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 32.00,
        'defaultRate' => 20.00,
        'features' => [
            'Digital lending platform',
            'Quick loan approval',
            'Flexible repayment',
            'Multiple loan products'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Credit score: 650+ preferred',
            'Smartphone with internet'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income documents',
            'Employment verification'
        ]
    ],
    'lazypay' => [
        'name' => 'LazyPay',
        'type' => 'Fintech Company',
        'minRate' => 15.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.00,
        'features' => [
            'Pay later solutions',
            'Credit line facility',
            'Instant approval',
            'No cost EMI options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Credit score: 650+ preferred',
            'Digital verification'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income proof',
            'Employment verification'
        ]
    ],
    
    // Additional Major Private Banks
    'standard-chartered-bank' => [
        'name' => 'Standard Chartered Bank',
        'type' => 'Private Bank',
        'minRate' => 11.00,
        'maxRate' => 19.99,
        'defaultRate' => 14.00,
        'features' => [
            'International banking expertise',
            'Premium banking services',
            'Quick approval process',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'citibank' => [
        'name' => 'Citibank',
        'type' => 'Private Bank',
        'minRate' => 10.75,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Global banking experience',
            'Premium customer service',
            'Competitive interest rates',
            'Digital banking solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹40,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income tax returns',
            'KYC documents'
        ]
    ],
    'hsbc-bank' => [
        'name' => 'HSBC Bank',
        'type' => 'Private Bank',
        'minRate' => 11.25,
        'maxRate' => 20.00,
        'defaultRate' => 14.50,
        'features' => [
            'International banking network',
            'Premium banking services',
            'Quick loan processing',
            'Flexible tenure options'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment certificate',
            'KYC documents'
        ]
    ],
    'dbs-bank-india' => [
        'name' => 'DBS Bank India',
        'type' => 'Private Bank',
        'minRate' => 11.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.00,
        'features' => [
            'International banking expertise',
            'Digital-first approach',
            'Quick loan processing',
            'Premium customer service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹40,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    
    // Additional NBFCs
    'aditya-birla-finance' => [
        'name' => 'Aditya Birla Finance',
        'type' => 'NBFC',
        'minRate' => 12.99,
        'maxRate' => 24.00,
        'defaultRate' => 16.50,
        'features' => [
            'Quick loan approval',
            'Flexible repayment options',
            'Competitive interest rates',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'cholamandalam-finance' => [
        'name' => 'Cholamandalam Investment and Finance',
        'type' => 'NBFC',
        'minRate' => 13.50,
        'maxRate' => 25.00,
        'defaultRate' => 17.50,
        'features' => [
            'Wide branch network',
            'Quick processing',
            'Flexible loan terms',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Income proof'
        ]
    ],
    'fullerton-india' => [
        'name' => 'Fullerton India',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 18.00,
        'features' => [
            'Quick loan disbursal',
            'Flexible repayment options',
            'Minimal documentation',
            'Digital loan processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Address proof'
        ]
    ],
    'home-credit-india' => [
        'name' => 'Home Credit India',
        'type' => 'NBFC',
        'minRate' => 15.00,
        'maxRate' => 30.00,
        'defaultRate' => 20.00,
        'features' => [
            'Point of sale financing',
            'Quick approval process',
            'Flexible EMI options',
            'Digital loan solutions'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Employment proof'
        ]
    ],
    'iifl-finance' => [
        'name' => 'IIFL Finance',
        'type' => 'NBFC',
        'minRate' => 13.75,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'Quick loan processing',
            'Competitive interest rates',
            'Flexible repayment tenure',
            'Digital loan application'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'iifl-home-finance' => [
        'name' => 'IIFL Home Finance',
        'type' => 'NBFC',
        'minRate' => 13.25,
        'maxRate' => 21.00,
        'defaultRate' => 16.00,
        'features' => [
            'Home finance expertise',
            'Quick loan approval',
            'Competitive interest rates',
            'Digital loan processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹25,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Property documents',
            'KYC documents'
        ]
    ],
    'hero-fincorp' => [
        'name' => 'Hero FinCorp',
        'type' => 'NBFC',
        'minRate' => 14.50,
        'maxRate' => 27.00,
        'defaultRate' => 19.00,
        'features' => [
            'Quick loan approval',
            'Flexible terms and conditions',
            'Doorstep service',
            'Wide network presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'tvs-credit' => [
        'name' => 'TVS Credit',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 18.50,
        'features' => [
            'Quick loan sanctions',
            'Flexible repayment options',
            'Competitive interest rates',
            'Easy documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Employment certificate'
        ]
    ],
    
    // Additional Small Finance Banks
    'fincare-small-finance-bank' => [
        'name' => 'Fincare Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.00,
        'maxRate' => 26.00,
        'defaultRate' => 17.50,
        'features' => [
            'Microfinance expertise',
            'Quick loan processing',
            'Flexible repayment terms',
            'Customer-centric approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Income documents'
        ]
    ],
    'northeast-small-finance-bank' => [
        'name' => 'North East Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 14.00,
        'maxRate' => 28.00,
        'defaultRate' => 19.00,
        'features' => [
            'Regional focus on Northeast',
            'Quick approval process',
            'Flexible loan terms',
            'Local market expertise'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹10,000 per month',
            'Work experience: 6 months minimum',
            'Credit score: 600+ accepted'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Address proof'
        ]
    ],
    
    // Additional Fintech Companies
    'navi-loans' => [
        'name' => 'Navi Loans',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 30.00,
        'defaultRate' => 18.00,
        'features' => [
            'AI-driven credit decisions',
            'Instant loan approval',
            'Paperless process',
            'Competitive interest rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹25,000 per month',
            'Credit score: 700+ preferred',
            'Digital verification process'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Aadhaar and PAN'
        ]
    ],
    'zype-loans' => [
        'name' => 'Zype (by Zomato)',
        'type' => 'Fintech Company',
        'minRate' => 16.00,
        'maxRate' => 32.00,
        'defaultRate' => 22.00,
        'features' => [
            'Digital-first approach',
            'Quick loan processing',
            'Flexible repayment options',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum salary: ₹20,000 per month',
            'Credit score: 650+ required',
            'Digital footprint verification'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income proof',
            'Employment verification'
        ]
    ],
    'faircent' => [
        'name' => 'Faircent',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 28.00,
        'defaultRate' => 18.50,
        'features' => [
            'Peer-to-peer lending platform',
            'Competitive interest rates',
            'Quick approval process',
            'Transparent pricing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum salary: ₹25,000 per month',
            'Credit score: 700+ preferred',
            'Stable employment'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Salary slips',
            'Employment proof'
        ]
    ],
    'rupeek' => [
        'name' => 'Rupeek',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 25.00,
        'defaultRate' => 16.00,
        'features' => [
            'Gold loan specialist',
            'Instant loan approval',
            'Digital gold verification',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 18-70 years',
            'Gold ornaments as collateral',
            'Minimum gold value: ₹5,000',
            'Valid identity proof'
        ],
        'documents' => [
            'Digital KYC',
            'Gold ornaments',
            'Identity proof',
            'Address proof'
        ]
    ],
    
    // Payment Banks
    'airtel-payments-bank' => [
        'name' => 'Airtel Payments Bank Ltd',
        'type' => 'Payment Bank',
        'minRate' => 18.00,
        'maxRate' => 36.00,
        'defaultRate' => 24.00,
        'features' => [
            'Digital banking services',
            'Quick loan processing',
            'Mobile-first approach',
            'Seamless UPI integration'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹15,000 per month',
            'Digital verification process',
            'Valid mobile number'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Income proof',
            'Mobile verification'
        ]
    ],
    'india-post-payments-bank' => [
        'name' => 'India Post Payments Bank Ltd',
        'type' => 'Payment Bank',
        'minRate' => 16.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.00,
        'features' => [
            'Government backing',
            'Wide branch network',
            'Rural accessibility',
            'Postal service integration'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum salary: ₹12,000 per month',
            'Government employee preference',
            'Valid identity proof'
        ],
        'documents' => [
            'KYC documents',
            'Salary slips',
            'Bank statements',
            'Address proof'
        ]
    ],
    'fino-payments-bank' => [
        'name' => 'FINO Payments Bank Ltd',
        'type' => 'Payment Bank',
        'minRate' => 17.00,
        'maxRate' => 32.00,
        'defaultRate' => 23.00,
        'features' => [
            'Financial inclusion focus',
            'Micro-finance expertise',
            'Rural banking solutions',
            'Digital literacy programs'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum salary: ₹10,000 per month',
            'Basic banking relationship',
            'Financial literacy'
        ],
        'documents' => [
            'Basic KYC',
            'Income proof',
            'Bank statements',
            'Identity verification'
        ]
    ],
    'paytm-payments-bank' => [
        'name' => 'Paytm Payments Bank Ltd',
        'type' => 'Payment Bank',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.00,
        'features' => [
            'Digital ecosystem integration',
            'Instant loan approval',
            'Cashback rewards',
            'Zero balance account'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum salary: ₹15,000 per month',
            'Paytm wallet usage history',
            'Digital transaction history'
        ],
        'documents' => [
            'Digital KYC',
            'Bank statements',
            'Paytm transaction history',
            'Income proof'
        ]
    ],
    'jio-payments-bank' => [
        'name' => 'Jio Payments Bank Ltd',
        'type' => 'Payment Bank',
        'minRate' => 19.00,
        'maxRate' => 35.00,
        'defaultRate' => 25.00,
        'features' => [
            'Telecom integration',
            'Digital-first banking',
            'Instant account opening',
            'Jio ecosystem benefits'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum salary: ₹12,000 per month',
            'Jio subscriber preference',
            'Digital verification'
        ],
        'documents' => [
            'Digital KYC',
            'Jio connection proof',
            'Income verification',
            'Bank statements'
        ]
    ],
    'nsdl-payments-bank' => [
        'name' => 'NSDL Payments Bank Limited',
        'type' => 'Payment Bank',
        'minRate' => 16.50,
        'maxRate' => 29.00,
        'defaultRate' => 21.50,
        'features' => [
            'Securities market expertise',
            'Digital banking solutions',
            'Investment-linked services',
            'Regulatory compliance focus'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹20,000 per month',
            'Investment experience preferred',
            'Clean credit history'
        ],
        'documents' => [
            'KYC documents',
            'Bank statements',
            'Income proof',
            'Investment documents'
        ]
    ],
    
    // Development Financial Institutions
    'nabard' => [
        'name' => 'National Bank for Agriculture and Rural Development',
        'type' => 'Development Financial Institution',
        'minRate' => 10.00,
        'maxRate' => 18.00,
        'defaultRate' => 12.50,
        'features' => [
            'Agricultural focus',
            'Rural development loans',
            'Government backing',
            'Subsidized interest rates'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Agricultural/rural activities',
            'Minimum income: ₹50,000 per year',
            'Valid agricultural land documents'
        ],
        'documents' => [
            'Agricultural land documents',
            'Income proof',
            'KYC documents',
            'Project report'
        ]
    ],
    'exim-bank' => [
        'name' => 'Export-Import Bank of India',
        'type' => 'Development Financial Institution',
        'minRate' => 8.50,
        'maxRate' => 15.00,
        'defaultRate' => 10.50,
        'features' => [
            'Export-import financing',
            'International trade support',
            'Government backing',
            'Competitive forex rates'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Export/import business',
            'Minimum turnover: ₹1 crore',
            'Valid export-import license'
        ],
        'documents' => [
            'Export-import license',
            'Business registration',
            'Financial statements',
            'KYC documents'
        ]
    ],
    'nhb' => [
        'name' => 'National Housing Bank',
        'type' => 'Development Financial Institution',
        'minRate' => 9.00,
        'maxRate' => 16.00,
        'defaultRate' => 11.50,
        'features' => [
            'Housing finance focus',
            'Regulatory oversight',
            'Government backing',
            'Long-term financing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Housing finance requirement',
            'Minimum income: ₹3 lakh per year',
            'Property documents required'
        ],
        'documents' => [
            'Property documents',
            'Income proof',
            'Bank statements',
            'KYC documents'
        ]
    ],
    'sidbi' => [
        'name' => 'Small Industries Development Bank of India',
        'type' => 'Development Financial Institution',
        'minRate' => 9.50,
        'maxRate' => 17.00,
        'defaultRate' => 12.00,
        'features' => [
            'MSME focus',
            'Small industry development',
            'Government backing',
            'Flexible repayment terms'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'MSME business',
            'Minimum project cost: ₹25 lakh',
            'Valid business registration'
        ],
        'documents' => [
            'Business registration',
            'Project report',
            'Financial statements',
            'KYC documents'
        ]
    ],
    
    // Regional Rural Banks
    'assam-gramin-vikash-bank' => [
        'name' => 'Assam Gramin Vikash Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.00,
        'maxRate' => 18.00,
        'defaultRate' => 14.50,
        'features' => [
            'Rural focus',
            'Agricultural lending',
            'Government support',
            'Local presence'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'Local area coverage'
        ],
        'documents' => [
            'Income proof',
            'Residence proof',
            'KYC documents',
            'Land documents if applicable'
        ]
    ],
    'andhra-pradesh-grameena-vikas-bank' => [
        'name' => 'Andhra Pradesh Grameena Vikas Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 11.50,
        'maxRate' => 17.50,
        'defaultRate' => 14.00,
        'features' => [
            'Rural development focus',
            'Agricultural support',
            'Government backing',
            'Regional expertise'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'AP state coverage'
        ],
        'documents' => [
            'Income proof',
            'Address proof',
            'KYC documents',
            'Agricultural documents'
        ]
    ],
    'baroda-gujarat-gramin-bank' => [
        'name' => 'Baroda Gujarat Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 11.75,
        'maxRate' => 17.75,
        'defaultRate' => 14.25,
        'features' => [
            'Bank of Baroda sponsorship',
            'Rural banking expertise',
            'Government support',
            'Gujarat coverage'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹60,000 per year',
            'Gujarat state coverage'
        ],
        'documents' => [
            'Income proof',
            'Residence proof',
            'KYC documents',
            'Business documents if applicable'
        ]
    ],
    'aryavart-bank' => [
        'name' => 'Aryavart Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.25,
        'maxRate' => 18.25,
        'defaultRate' => 14.75,
        'features' => [
            'UP rural focus',
            'Agricultural support',
            'Government backing',
            'Local connectivity'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'UP state coverage'
        ],
        'documents' => [
            'Income proof',
            'Address proof',
            'KYC documents',
            'Land records if applicable'
        ]
    ],
    'punjab-gramin-bank' => [
        'name' => 'Punjab Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 11.50,
        'maxRate' => 17.00,
        'defaultRate' => 13.75,
        'features' => [
            'Punjab rural focus',
            'Agricultural expertise',
            'Government support',
            'Punjabi language support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹60,000 per year',
            'Punjab state coverage'
        ],
        'documents' => [
            'Income proof',
            'Residence proof',
            'KYC documents',
            'Agricultural documents'
        ]
    ],
    'karnataka-vikas-gramin-bank' => [
        'name' => 'Karnataka Vikas Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.00,
        'maxRate' => 18.00,
        'defaultRate' => 14.50,
        'features' => [
            'Karnataka rural focus',
            'Agricultural development',
            'Government backing',
            'Local language support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'Karnataka state coverage'
        ],
        'documents' => [
            'Income proof',
            'Address proof',
            'KYC documents',
            'Land documents if applicable'
        ]
    ],
    'tamil-nadu-grama-bank' => [
        'name' => 'Tamil Nadu Grama Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 11.75,
        'maxRate' => 17.50,
        'defaultRate' => 14.25,
        'features' => [
            'Tamil Nadu focus',
            'Rural development',
            'Government support',
            'Tamil language support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'TN state coverage'
        ],
        'documents' => [
            'Income proof',
            'Residence proof',
            'KYC documents',
            'Agricultural documents'
        ]
    ],
    'kerala-gramin-bank' => [
        'name' => 'Kerala Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.50,
        'maxRate' => 18.50,
        'defaultRate' => 15.00,
        'features' => [
            'Kerala rural focus',
            'Coastal area expertise',
            'Government backing',
            'Malayalam support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'Kerala state coverage'
        ],
        'documents' => [
            'Income proof',
            'Address proof',
            'KYC documents',
            'Property documents if applicable'
        ]
    ],
    'maharashtra-gramin-bank' => [
        'name' => 'Maharashtra Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.00,
        'maxRate' => 18.00,
        'defaultRate' => 14.50,
        'features' => [
            'Maharashtra rural focus',
            'Agricultural expertise',
            'Government support',
            'Marathi language support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹50,000 per year',
            'Maharashtra state coverage'
        ],
        'documents' => [
            'Income proof',
            'Residence proof',
            'KYC documents',
            'Land documents if applicable'
        ]
    ],
    'odisha-gramya-bank' => [
        'name' => 'Odisha Gramya Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 12.25,
        'maxRate' => 18.25,
        'defaultRate' => 14.75,
        'features' => [
            'Odisha rural focus',
            'Tribal area support',
            'Government backing',
            'Odia language support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Rural/semi-urban residents',
            'Minimum income: ₹40,000 per year',
            'Odisha state coverage'
        ],
        'documents' => [
            'Income proof',
            'Address proof',
            'KYC documents',
            'Tribal certificate if applicable'
        ]
    ],
    
    // Foreign Banks
    'standard-chartered-bank-foreign' => [
        'name' => 'Standard Chartered Bank',
        'type' => 'Foreign Bank',
        'minRate' => 11.00,
        'maxRate' => 19.99,
        'defaultRate' => 14.00,
        'features' => [
            'International banking expertise',
            'Premium banking services',
            'Global network access',
            'Multi-currency solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹30,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'citibank-foreign' => [
        'name' => 'Citibank N.A.',
        'type' => 'Foreign Bank',
        'minRate' => 10.75,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Global banking experience',
            'Premium customer service',
            'International money transfers',
            'Digital banking solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹40,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income tax returns',
            'KYC documents'
        ]
    ],
    'hsbc-bank-foreign' => [
        'name' => 'Hong Kong and Shanghai Banking Corporation Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 20.00,
        'defaultRate' => 14.50,
        'features' => [
            'International banking network',
            'Premium banking services',
            'Global connectivity',
            'Multi-country banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment certificate',
            'KYC documents'
        ]
    ],
    'dbs-bank-foreign' => [
        'name' => 'DBS Bank India Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.00,
        'features' => [
            'Singapore banking expertise',
            'Digital-first approach',
            'Asian market focus',
            'Premium customer service'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹40,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Form 16',
            'KYC documents'
        ]
    ],
    'deutsche-bank' => [
        'name' => 'Deutsche Bank A.G.',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 21.00,
        'defaultRate' => 15.50,
        'features' => [
            'German banking excellence',
            'Corporate banking focus',
            'International trade finance',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'bnp-paribas' => [
        'name' => 'BNP Paribas',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 20.50,
        'defaultRate' => 15.25,
        'features' => [
            'French banking heritage',
            'Corporate focus',
            'International expertise',
            'Premium banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment certificate',
            'KYC documents'
        ]
    ],
    'bank-of-america' => [
        'name' => 'Bank of America',
        'type' => 'Foreign Bank',
        'minRate' => 12.50,
        'maxRate' => 22.00,
        'defaultRate' => 16.00,
        'features' => [
            'US banking expertise',
            'Corporate banking',
            'International services',
            'Premium solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income tax returns',
            'KYC documents'
        ]
    ],
    'jp-morgan-chase' => [
        'name' => 'J.P. Morgan Chase Bank N.A.',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 21.50,
        'defaultRate' => 15.75,
        'features' => [
            'Global investment banking',
            'Premium services',
            'Corporate focus',
            'International solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'anz-bank' => [
        'name' => 'Australia and New Zealand Banking Group Ltd.',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.50,
        'defaultRate' => 14.75,
        'features' => [
            'Australian banking expertise',
            'Asia-Pacific focus',
            'Trade finance',
            'Premium banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹60,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'barclays-bank' => [
        'name' => 'Barclays Bank Plc.',
        'type' => 'Foreign Bank',
        'minRate' => 12.25,
        'maxRate' => 21.25,
        'defaultRate' => 15.50,
        'features' => [
            'British banking heritage',
            'Investment banking',
            'Corporate services',
            'International reach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'ab-bank-limited' => [
        'name' => 'AB Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.50,
        'defaultRate' => 14.75,
        'features' => [
            'Bangladeshi banking',
            'Trade finance',
            'Corporate banking',
            'Investment solutions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹60,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'american-express-banking' => [
        'name' => 'American Express Banking Corporation',
        'type' => 'Foreign Bank',
        'minRate' => 12.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.25,
        'features' => [
            'Premium banking',
            'Corporate services',
            'Investment banking',
            'Wealth management'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'bank-of-bahrain-kuwait' => [
        'name' => 'Bank of Bahrain and Kuwait B.S.C.',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.75,
        'defaultRate' => 15.00,
        'features' => [
            'Islamic banking',
            'Middle East expertise',
            'Corporate banking',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'bank-of-ceylon' => [
        'name' => 'Bank of Ceylon',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 18.75,
        'defaultRate' => 14.50,
        'features' => [
            'Sri Lankan banking',
            'Regional expertise',
            'Trade finance',
            'Corporate services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'bank-of-china-limited' => [
        'name' => 'Bank of China Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Chinese banking giant',
            'International trade',
            'Corporate banking',
            'Investment services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'bank-of-nova-scotia' => [
        'name' => 'Bank of Nova Scotia',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 15.00,
        'features' => [
            'Canadian banking',
            'International presence',
            'Corporate services',
            'Investment banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹90,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'bank-of-tokyo-mitsubishi' => [
        'name' => 'Bank of Tokyo-Mitsubishi UFJ Ltd.',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 14.90,
        'features' => [
            'Japanese banking leader',
            'Technology focus',
            'Corporate banking',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'bny-mellon' => [
        'name' => 'BNY Mellon',
        'type' => 'Foreign Bank',
        'minRate' => 12.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.50,
        'features' => [
            'Investment banking',
            'Asset management',
            'Custodial services',
            'Wealth management'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'commonwealth-bank-australia' => [
        'name' => 'Commonwealth Bank of Australia',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 15.00,
        'features' => [
            'Australian banking giant',
            'Digital innovation',
            'Corporate services',
            'Investment banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'credit-agricole' => [
        'name' => 'Credit Agricole Corporate and Investment Bank',
        'type' => 'Foreign Bank',
        'minRate' => 12.25,
        'maxRate' => 20.25,
        'defaultRate' => 15.25,
        'features' => [
            'French banking',
            'Corporate investment',
            'Agricultural finance',
            'International services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,20,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'credit-suisse' => [
        'name' => 'Credit Suisse AG',
        'type' => 'Foreign Bank',
        'minRate' => 12.75,
        'maxRate' => 21.00,
        'defaultRate' => 15.75,
        'features' => [
            'Swiss banking',
            'Private banking',
            'Investment banking',
            'Wealth management'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹2,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'ctbc-bank' => [
        'name' => 'CTBC Bank Co. Ltd.',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Taiwanese banking',
            'Asian focus',
            'Corporate banking',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹70,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'erste-bank' => [
        'name' => 'Erste Bank',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 15.00,
        'features' => [
            'Austrian banking',
            'European expertise',
            'Corporate services',
            'Investment banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹90,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'industrial-commercial-bank-china' => [
        'name' => 'Industrial and Commercial Bank of China Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 18.75,
        'defaultRate' => 14.50,
        'features' => [
            'World\'s largest bank',
            'Chinese expertise',
            'Corporate banking',
            'International trade'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'industrial-bank-korea' => [
        'name' => 'Industrial Bank of Korea',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Korean banking',
            'Industrial finance',
            'Corporate services',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'ing-vysya-bank' => [
        'name' => 'ING Vysya Bank Ltd.',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 15.00,
        'features' => [
            'Dutch banking heritage',
            'Digital innovation',
            'Corporate services',
            'Retail banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹60,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'jpmorgan-chase-bank' => [
        'name' => 'JPMorgan Chase Bank N.A.',
        'type' => 'Foreign Bank',
        'minRate' => 12.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.50,
        'features' => [
            'American banking giant',
            'Investment banking',
            'Corporate services',
            'Wealth management'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,50,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'keb-hana-bank' => [
        'name' => 'KEB Hana Bank',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Korean banking',
            'Asian markets',
            'Corporate banking',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'krung-thai-bank' => [
        'name' => 'Krung Thai Bank Public Company Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 18.75,
        'defaultRate' => 14.50,
        'features' => [
            'Thai banking',
            'Southeast Asian focus',
            'Corporate services',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹60,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'mashreq-bank' => [
        'name' => 'Mashreq Bank PSC',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 15.00,
        'features' => [
            'UAE banking',
            'Middle East expertise',
            'Corporate banking',
            'Islamic banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'mizuho-bank' => [
        'name' => 'Mizuho Bank Ltd.',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 14.90,
        'features' => [
            'Japanese banking',
            'Corporate finance',
            'Investment banking',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'ncc-bank-limited' => [
        'name' => 'NCC Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 18.50,
        'defaultRate' => 14.25,
        'features' => [
            'Bangladeshi banking',
            'Corporate services',
            'Trade finance',
            'SME banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹50,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'oman-international-bank' => [
        'name' => 'Oman International Bank S.A.O.G',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Omani banking',
            'GCC expertise',
            'Corporate banking',
            'Islamic banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹70,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'pt-bank-maybank' => [
        'name' => 'PT Bank Maybank Indonesia Tbk',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 18.75,
        'defaultRate' => 14.50,
        'features' => [
            'Malaysian banking',
            'Islamic banking',
            'Corporate services',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹60,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'rabobank-international' => [
        'name' => 'Rabobank International',
        'type' => 'Foreign Bank',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 15.00,
        'features' => [
            'Dutch cooperative bank',
            'Agricultural finance',
            'Corporate banking',
            'Sustainable banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹90,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'royal-bank-scotland' => [
        'name' => 'Royal Bank of Scotland N.V.',
        'type' => 'Foreign Bank',
        'minRate' => 12.25,
        'maxRate' => 20.00,
        'defaultRate' => 15.25,
        'features' => [
            'Scottish banking',
            'Corporate banking',
            'Investment services',
            'International presence'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'sber-bank' => [
        'name' => 'Sber Bank',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Russian banking',
            'Digital innovation',
            'Corporate services',
            'Technology focus'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'shinhan-bank' => [
        'name' => 'Shinhan Bank',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Korean banking',
            'Digital banking',
            'Corporate services',
            'Investment banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹75,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 720+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'societe-generale' => [
        'name' => 'Societe Generale',
        'type' => 'Foreign Bank',
        'minRate' => 12.25,
        'maxRate' => 20.25,
        'defaultRate' => 15.25,
        'features' => [
            'French banking',
            'Investment banking',
            'Corporate services',
            'Private banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,20,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'sonali-bank-limited' => [
        'name' => 'Sonali Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.00,
        'maxRate' => 18.00,
        'defaultRate' => 14.00,
        'features' => [
            'Bangladeshi banking',
            'Government ownership',
            'Corporate services',
            'Trade finance'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹45,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'sumitomo-mitsui-banking' => [
        'name' => 'Sumitomo Mitsui Banking Corporation',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 14.90,
        'features' => [
            'Japanese banking',
            'Corporate finance',
            'Investment banking',
            'Global presence'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹1,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'ubs-ag' => [
        'name' => 'UBS AG',
        'type' => 'Foreign Bank',
        'minRate' => 12.75,
        'maxRate' => 21.00,
        'defaultRate' => 15.75,
        'features' => [
            'Swiss banking',
            'Wealth management',
            'Investment banking',
            'Private banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹2,00,000 per month',
            'Work experience: 3 years minimum',
            'Credit score: 750+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Income proof',
            'KYC documents'
        ]
    ],
    'united-overseas-bank' => [
        'name' => 'United Overseas Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.75,
        'features' => [
            'Singaporean banking',
            'Asian expertise',
            'Corporate banking',
            'Private banking'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ],
    'westpac-banking' => [
        'name' => 'Westpac Banking Corporation',
        'type' => 'Foreign Bank',
        'minRate' => 11.75,
        'maxRate' => 19.25,
        'defaultRate' => 15.00,
        'features' => [
            'Australian banking',
            'Asia-Pacific focus',
            'Corporate services',
            'Digital innovation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum salary: ₹80,000 per month',
            'Work experience: 2 years minimum',
            'Credit score: 750+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Employment proof',
            'KYC documents'
        ]
    ]
];

// Get bank parameter from URL
$bankSlug = $_GET['bank'] ?? '';
$bankInfo = $bankData[$bankSlug] ?? null;

// If bank not found, redirect to generic calculator instead of 404
if (!$bankInfo) {
    // Log missing bank for debugging
    error_log("Missing bank slug in car loan calculator: " . $bankSlug);
    
    // 301 redirect to generic calculator (preserves SEO)
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /calculators/car-loan-emi-calculator');
    exit;
}

// Set dynamic page variables
$bankName = $bankInfo['name'];
$bankType = $bankInfo['type'];
$pageTitle = "{$bankName} Car Loan EMI Calculator 2025 - Calculate Monthly Payments | Thiyagi.com";
$pageDescription = "Calculate your {$bankName} car loan EMI with our advanced calculator. Get instant results for monthly payments, total interest, and payment schedule. Current {$bankName} car loan interest rates and eligibility.";
$pageKeywords = "{$bankName} car loan EMI calculator, {$bankName} car loan calculator, {$bankName} vehicle loan EMI calculation, {$bankName} car loan interest rates 2025, {$bankName} car loan, {$bankName} auto finance";
$canonicalUrl = "https://www.thiyagi.com/calculators/{$bankSlug}-car-loan-emi-calculator";

// Calculate EMI function
function calculateEMI($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $months = $tenure;
    
    if ($monthlyRate == 0) {
        return $principal / $months;
    }
    
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / 
           (pow(1 + $monthlyRate, $months) - 1);
    
    return round($emi, 2);
}

// Generate amortization schedule
function generateAmortizationSchedule($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $emi = calculateEMI($principal, $rate, $tenure);
    $schedule = [];
    $balance = $principal;
    
    for ($month = 1; $month <= min($tenure, 12); $month++) {
        $interestPayment = $balance * $monthlyRate;
        $principalPayment = $emi - $interestPayment;
        $balance -= $principalPayment;
        
        $schedule[] = [
            'month' => $month,
            'emi' => $emi,
            'principal' => max(0, $principalPayment),
            'interest' => max(0, $interestPayment),
            'balance' => max(0, $balance)
        ];
        
        if ($balance <= 0) break;
    }
    
    return $schedule;
}

// Default values based on bank
$defaultPrincipal = 800000;
$defaultRate = $bankInfo['defaultRate'];
$defaultTenure = 60;

// Handle AJAX requests
if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    header('Content-Type: application/json');
    
    $principal = filter_input(INPUT_GET, 'principal', FILTER_VALIDATE_FLOAT) ?: $defaultPrincipal;
    $rate = filter_input(INPUT_GET, 'rate', FILTER_VALIDATE_FLOAT) ?: $defaultRate;
    $tenure = filter_input(INPUT_GET, 'tenure', FILTER_VALIDATE_INT) ?: $defaultTenure;
    
    $emi = calculateEMI($principal, $rate, $tenure);
    $totalPayment = $emi * $tenure;
    $totalInterest = $totalPayment - $principal;
    $schedule = generateAmortizationSchedule($principal, $rate, $tenure);
    
    echo json_encode([
        'emi' => $emi,
        'totalPayment' => $totalPayment,
        'totalInterest' => $totalInterest,
        'principal' => $principal,
        'schedule' => $schedule,
        'formatted' => [
            'emi' => '₹' . number_format($emi, 0),
            'totalPayment' => '₹' . number_format($totalPayment, 0),
            'totalInterest' => '₹' . number_format($totalInterest, 0),
            'principal' => '₹' . number_format($principal, 0)
        ]
    ]);
    exit;
}

// Bank color scheme based on type
$colorScheme = [
    'Private Bank' => ['primary' => 'blue', 'secondary' => 'indigo'],
    'Public Sector Bank' => ['primary' => 'green', 'secondary' => 'emerald'],
    'Small Finance Bank' => ['primary' => 'purple', 'secondary' => 'violet'],
    'NBFC' => ['primary' => 'orange', 'secondary' => 'amber'],
    'Fintech' => ['primary' => 'pink', 'secondary' => 'rose']
];

$colors = $colorScheme[$bankType] ?? $colorScheme['Private Bank'];
?>

<?php include '../header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Thiyagi.com">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Thiyagi.com">
    <meta name="revisit-after" content="7 days">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom CSS -->
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">

<div class="min-h-screen bg-gradient-to-br from-<?php echo $colors['primary']; ?>-50 via-white to-<?php echo $colors['secondary']; ?>-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-<?php echo $colors['primary']; ?>-600 to-<?php echo $colors['secondary']; ?>-700 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-car text-2xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php echo $bankName; ?> Car Loan EMI Calculator 2025</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">
                    Calculate your <?php echo $bankName; ?> car loan EMI with current 2025 interest rates. 
                    Get instant results for monthly payments, total interest, and payment schedule for vehicle financing.
                </p>
                <div class="mt-6 inline-flex items-center bg-white/20 rounded-xl px-6 py-3">
                    <i class="fas fa-tag text-yellow-400 mr-2"></i>
                    <span class="font-semibold"><?php echo $bankType; ?></span>
                    <span class="mx-3 opacity-60">|</span>
                    <span>Interest Rate: <?php echo $bankInfo['minRate']; ?>% - <?php echo $bankInfo['maxRate']; ?>%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Calculator Input Section -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-sliders-h text-<?php echo $colors['primary']; ?>-600 mr-3"></i>
                        Loan Details
                    </h2>
                    
                    <form id="emiForm" class="space-y-6">
                        <!-- Loan Amount -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-rupee-sign text-<?php echo $colors['primary']; ?>-600 mr-2"></i>
                                Loan Amount
                            </label>
                            <div class="relative">
                                <input type="range" id="principalRange" min="100000" max="10000000" step="50000" value="<?php echo $defaultPrincipal; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-<?php echo $colors['primary']; ?>-200 to-<?php echo $colors['primary']; ?>-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="principalInput" value="<?php echo number_format($defaultPrincipal); ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-<?php echo $colors['primary']; ?>-500 focus:ring-2 focus:ring-<?php echo $colors['primary']; ?>-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter loan amount">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>₹50,000</span>
                                <span>₹50,00,000</span>
                            </div>
                        </div>

                        <!-- Interest Rate -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-percentage text-green-600 mr-2"></i>
                                Annual Interest Rate
                            </label>
                            <div class="relative">
                                <input type="range" id="rateRange" min="<?php echo $bankInfo['minRate']; ?>" max="<?php echo $bankInfo['maxRate']; ?>" step="0.1" value="<?php echo $defaultRate; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-green-200 to-green-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="rateInput" value="<?php echo $defaultRate; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter interest rate">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span><?php echo $bankInfo['minRate']; ?>%</span>
                                <span><?php echo $bankInfo['maxRate']; ?>%</span>
                            </div>
                            <div class="text-center">
                                <span class="inline-block bg-<?php echo $colors['primary']; ?>-100 text-<?php echo $colors['primary']; ?>-800 px-3 py-1 rounded-full text-sm font-medium">
                                    <?php echo $bankName; ?> Rate Range
                                </span>
                            </div>
                        </div>

                        <!-- Loan Tenure -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-calendar-alt text-purple-600 mr-2"></i>
                                Loan Tenure (Months)
                            </label>
                            <div class="relative">
                                <input type="range" id="tenureRange" min="6" max="240" step="6" value="<?php echo $defaultTenure; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-purple-200 to-purple-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="tenureInput" value="<?php echo $defaultTenure; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter tenure in months">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>6 months</span>
                                <span>240 months (20 years)</span>
                            </div>
                            <div class="text-center">
                                <span id="tenureYears" class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    5 years
                                </span>
                            </div>
                        </div>

                        <!-- Quick Amount Buttons -->
                        <div class="space-y-3">
                            <label class="text-sm font-semibold text-gray-700">Quick Amount Selection</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button type="button" onclick="setAmount(100000)" class="px-4 py-2 bg-<?php echo $colors['primary']; ?>-100 text-<?php echo $colors['primary']; ?>-700 rounded-lg hover:bg-<?php echo $colors['primary']; ?>-200 transition-colors duration-200 font-medium">₹1 Lakh</button>
                                <button type="button" onclick="setAmount(300000)" class="px-4 py-2 bg-<?php echo $colors['primary']; ?>-100 text-<?php echo $colors['primary']; ?>-700 rounded-lg hover:bg-<?php echo $colors['primary']; ?>-200 transition-colors duration-200 font-medium">₹3 Lakh</button>
                                <button type="button" onclick="setAmount(500000)" class="px-4 py-2 bg-<?php echo $colors['primary']; ?>-100 text-<?php echo $colors['primary']; ?>-700 rounded-lg hover:bg-<?php echo $colors['primary']; ?>-200 transition-colors duration-200 font-medium">₹5 Lakh</button>
                                <button type="button" onclick="setAmount(1000000)" class="px-4 py-2 bg-<?php echo $colors['primary']; ?>-100 text-<?php echo $colors['primary']; ?>-700 rounded-lg hover:bg-<?php echo $colors['primary']; ?>-200 transition-colors duration-200 font-medium">₹10 Lakh</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="lg:col-span-2 space-y-6">
                <!-- EMI Results Cards -->
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Monthly EMI -->
                    <div class="bg-gradient-to-br from-<?php echo $colors['primary']; ?>-500 to-<?php echo $colors['primary']; ?>-600 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Monthly EMI</div>
                                <div id="emiAmount" class="text-2xl font-bold">₹8,560</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Amount you pay every month</div>
                    </div>

                    <!-- Total Interest -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Total Interest</div>
                                <div id="interestAmount" class="text-2xl font-bold">₹1,13,600</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Total interest over loan period</div>
                    </div>

                    <!-- Total Payment -->
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-receipt text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Total Payment</div>
                                <div id="totalAmount" class="text-2xl font-bold">₹6,13,600</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Total amount you'll pay</div>
                    </div>
                </div>

                <!-- Bank Information Card -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-info-circle text-<?php echo $colors['primary']; ?>-600 mr-3"></i>
                        <?php echo $bankName; ?> Car Loan Information
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Key Features -->
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-star text-yellow-500 mr-2"></i>
                                Key Features
                            </h4>
                            <ul class="space-y-2">
                                <?php foreach ($bankInfo['features'] as $feature): ?>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-sm"></i>
                                    <span class="text-gray-600 text-sm"><?php echo htmlspecialchars($feature); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Interest Rate Info -->
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-percentage text-<?php echo $colors['primary']; ?>-500 mr-2"></i>
                                Interest Rate Details
                            </h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-3 bg-<?php echo $colors['primary']; ?>-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700">Minimum Rate</span>
                                    <span class="font-bold text-<?php echo $colors['primary']; ?>-600"><?php echo $bankInfo['minRate']; ?>%</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-orange-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700">Maximum Rate</span>
                                    <span class="font-bold text-orange-600"><?php echo $bankInfo['maxRate']; ?>%</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-2">
                                    * Rates vary based on credit profile and loan amount
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loan Breakdown Chart -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-chart-pie text-<?php echo $colors['primary']; ?>-600 mr-3"></i>
                        Loan Breakdown
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Pie Chart -->
                        <div class="relative">
                            <canvas id="loanChart" width="300" height="300"></canvas>
                        </div>
                        <!-- Breakdown Details -->
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-<?php echo $colors['primary']; ?>-50 rounded-xl">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-<?php echo $colors['primary']; ?>-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700">Principal Amount</span>
                                </div>
                                <span id="principalBreakdown" class="font-bold text-<?php echo $colors['primary']; ?>-600">₹5,00,000</span>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-orange-50 rounded-xl">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-orange-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700">Total Interest</span>
                                </div>
                                <span id="interestBreakdown" class="font-bold text-orange-600">₹1,13,600</span>
                            </div>
                            <div class="mt-4 p-4 bg-gray-50 rounded-xl">
                                <div class="text-sm text-gray-600 mb-2">Interest Rate Distribution</div>
                                <div class="flex justify-between text-sm">
                                    <span>Principal: <span id="principalPercentage">81.5%</span></span>
                                    <span>Interest: <span id="interestPercentage">18.5%</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amortization Schedule -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-table text-green-600 mr-3"></i>
                        Payment Schedule (First 12 Months)
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Month</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">EMI</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Principal</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Interest</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Balance</th>
                                </tr>
                            </thead>
                            <tbody id="amortizationTable">
                                <!-- Populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Eligibility & Documents -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Eligibility Criteria -->
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-user-check text-green-600 mr-3"></i>
                            Eligibility Criteria
                        </h3>
                        <ul class="space-y-3">
                            <?php foreach ($bankInfo['eligibility'] as $criteria): ?>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-600"><?php echo htmlspecialchars($criteria); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <!-- Required Documents -->
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-file-alt text-<?php echo $colors['primary']; ?>-600 mr-3"></i>
                            Required Documents
                        </h3>
                        <ul class="space-y-3">
                            <?php foreach ($bankInfo['documents'] as $document): ?>
                            <li class="flex items-start">
                                <i class="fas fa-file text-<?php echo $colors['primary']; ?>-500 mr-3 mt-1"></i>
                                <span class="text-gray-600"><?php echo htmlspecialchars($document); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Content Section -->
        <div class="mt-12 bg-white rounded-2xl shadow-xl p-8">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold text-gray-800 mb-6"><?php echo $bankName; ?> Car Loan EMI Calculator 2025 - Complete Guide</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-university text-<?php echo $colors['primary']; ?>-500 mr-2"></i>
                            About <?php echo $bankName; ?>
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo $bankName; ?> is a leading <?php echo strtolower($bankType); ?> offering competitive car loan products. 
                            With interest rates ranging from <?php echo $bankInfo['minRate']; ?>% to <?php echo $bankInfo['maxRate']; ?>% per annum, 
                            <?php echo $bankName; ?> provides flexible financing solutions for vehicle purchase needs.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calculator text-<?php echo $colors['primary']; ?>-500 mr-2"></i>
                            EMI Calculation Benefits
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Our <?php echo $bankName; ?> EMI calculator helps you plan your car loan effectively. 
                            Calculate exact monthly installments, total interest payable, and compare different loan scenarios 
                            to make informed financial decisions for vehicle purchase.
                        </p>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4"><?php echo $bankName; ?> Car Loan Features 2025</h3>
                <div class="bg-gradient-to-r from-<?php echo $colors['primary']; ?>-50 to-<?php echo $colors['secondary']; ?>-50 rounded-xl p-6 mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-star text-<?php echo $colors['primary']; ?>-600 mr-2"></i>
                                Key Highlights
                            </h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-<?php echo $colors['primary']; ?>-500 mr-2 mt-1 text-xs"></i>
                                    <span>Interest rates starting from <?php echo $bankInfo['minRate']; ?>% per annum</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-<?php echo $colors['primary']; ?>-500 mr-2 mt-1 text-xs"></i>
                                    <span><?php echo $bankType; ?> with nationwide presence</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-<?php echo $colors['primary']; ?>-500 mr-2 mt-1 text-xs"></i>
                                    <span>Quick processing and approval</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-clock text-green-600 mr-2"></i>
                                Processing Time
                            </h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>Instant pre-approval for eligible customers</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>Quick documentation process</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>Fast disbursal upon approval</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-xl">
                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-exclamation-triangle text-yellow-500 mr-2"></i>
                        Important Disclaimer
                    </h4>
                    <p class="text-gray-700">
                        This calculator provides estimates based on the inputs provided. Actual EMI and interest rates from 
                        <?php echo $bankName; ?> may vary based on credit profile, loan amount, tenure, and current market conditions. 
                        Please contact <?php echo $bankName; ?> directly for exact rates and terms.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js for the pie chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Global variables
let loanChart;
let currentPrincipal = <?php echo $defaultPrincipal; ?>;
let currentRate = <?php echo $defaultRate; ?>;
let currentTenure = <?php echo $defaultTenure; ?>;
const bankSlug = '<?php echo $bankSlug; ?>';

// Initialize the calculator
document.addEventListener('DOMContentLoaded', function() {
    setupEventListeners();
    updateCalculations();
    initializeChart();
});

function setupEventListeners() {
    // Principal amount
    const principalRange = document.getElementById('principalRange');
    const principalInput = document.getElementById('principalInput');
    
    principalRange.addEventListener('input', function() {
        currentPrincipal = parseInt(this.value);
        principalInput.value = formatNumber(currentPrincipal);
        updateCalculations();
    });
    
    principalInput.addEventListener('input', function() {
        const value = parseFloat(this.value.replace(/,/g, ''));
        if (!isNaN(value) && value >= 50000 && value <= 5000000) {
            currentPrincipal = value;
            principalRange.value = value;
            updateCalculations();
        }
    });
    
    // Interest rate
    const rateRange = document.getElementById('rateRange');
    const rateInput = document.getElementById('rateInput');
    
    rateRange.addEventListener('input', function() {
        currentRate = parseFloat(this.value);
        rateInput.value = currentRate;
        updateCalculations();
    });
    
    rateInput.addEventListener('input', function() {
        const value = parseFloat(this.value);
        const minRate = <?php echo $bankInfo['minRate']; ?>;
        const maxRate = <?php echo $bankInfo['maxRate']; ?>;
        if (!isNaN(value) && value >= minRate && value <= maxRate) {
            currentRate = value;
            rateRange.value = value;
            updateCalculations();
        }
    });
    
    // Tenure
    const tenureRange = document.getElementById('tenureRange');
    const tenureInput = document.getElementById('tenureInput');
    
    tenureRange.addEventListener('input', function() {
        currentTenure = parseInt(this.value);
        tenureInput.value = currentTenure;
        updateTenureDisplay();
        updateCalculations();
    });
    
    tenureInput.addEventListener('input', function() {
        const value = parseInt(this.value);
        if (!isNaN(value) && value >= 6 && value <= 240) {
            currentTenure = value;
            tenureRange.value = value;
            updateTenureDisplay();
            updateCalculations();
        }
    });
    
    updateTenureDisplay();
}

function updateTenureDisplay() {
    const years = Math.floor(currentTenure / 12);
    const months = currentTenure % 12;
    let displayText = '';
    
    if (years > 0) {
        displayText += years + ' year' + (years > 1 ? 's' : '');
    }
    if (months > 0) {
        if (displayText) displayText += ' ';
        displayText += months + ' month' + (months > 1 ? 's' : '');
    }
    
    document.getElementById('tenureYears').textContent = displayText;
}

function updateCalculations() {
    fetch(`?ajax=1&bank=${bankSlug}&principal=${currentPrincipal}&rate=${currentRate}&tenure=${currentTenure}`)
        .then(response => response.json())
        .then(data => {
            // Update result cards
            document.getElementById('emiAmount').textContent = data.formatted.emi;
            document.getElementById('interestAmount').textContent = data.formatted.totalInterest;
            document.getElementById('totalAmount').textContent = data.formatted.totalPayment;
            
            // Update breakdown
            document.getElementById('principalBreakdown').textContent = data.formatted.principal;
            document.getElementById('interestBreakdown').textContent = data.formatted.totalInterest;
            
            // Update percentages
            const principalPerc = ((data.principal / data.totalPayment) * 100).toFixed(1);
            const interestPerc = ((data.totalInterest / data.totalPayment) * 100).toFixed(1);
            document.getElementById('principalPercentage').textContent = principalPerc + '%';
            document.getElementById('interestPercentage').textContent = interestPerc + '%';
            
            // Update chart
            updateChart(data.principal, data.totalInterest);
            
            // Update amortization table
            updateAmortizationTable(data.schedule);
        })
        .catch(error => console.error('Error:', error));
}

function initializeChart() {
    const ctx = document.getElementById('loanChart').getContext('2d');
    loanChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal Amount', 'Total Interest'],
            datasets: [{
                data: [currentPrincipal, 0],
                backgroundColor: ['#3B82F6', '#F97316'],
                borderWidth: 2,
                borderColor: '#fff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = formatCurrency(context.raw);
                            const percentage = ((context.raw / (context.dataset.data[0] + context.dataset.data[1])) * 100).toFixed(1);
                            return context.label + ': ' + value + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function updateChart(principal, interest) {
    if (loanChart) {
        loanChart.data.datasets[0].data = [principal, interest];
        loanChart.update();
    }
}

function updateAmortizationTable(schedule) {
    const tbody = document.getElementById('amortizationTable');
    tbody.innerHTML = '';
    
    schedule.forEach(payment => {
        const row = document.createElement('tr');
        row.className = 'border-b hover:bg-gray-50';
        row.innerHTML = `
            <td class="px-4 py-3 font-medium">${payment.month}</td>
            <td class="px-4 py-3 text-right">₹${formatNumber(payment.emi)}</td>
            <td class="px-4 py-3 text-right text-blue-600">₹${formatNumber(payment.principal)}</td>
            <td class="px-4 py-3 text-right text-orange-600">₹${formatNumber(payment.interest)}</td>
            <td class="px-4 py-3 text-right font-medium">₹${formatNumber(payment.balance)}</td>
        `;
        tbody.appendChild(row);
    });
}

function setAmount(amount) {
    currentPrincipal = amount;
    document.getElementById('principalRange').value = amount;
    document.getElementById('principalInput').value = formatNumber(amount);
    updateCalculations();
}

function formatNumber(num) {
    return new Intl.NumberFormat('en-IN').format(Math.round(num));
}

function formatCurrency(num) {
    return '₹' + formatNumber(num);
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "<?php echo $bankName; ?> Car Loan EMI Calculator 2025",
  "description": "Calculate your <?php echo $bankName; ?> car loan EMI for 2025 with current interest rates. Get instant results for monthly payments, total interest, and payment schedule for vehicle financing.",
  "url": "<?php echo $canonicalUrl; ?>",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Any",
  "browserRequirements": "HTML5, JavaScript",
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com",
    "url": "https://www.thiyagi.com"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "<?php echo $bankName; ?> specific EMI calculation",
    "Current 2025 interest rates",
    "Interactive loan parameter adjustment",
    "Visual loan breakdown charts",
    "Bank-specific eligibility criteria",
    "Required documents information"
  ]
}
</script>

<?php include '../footer.php';?>

</body>
</html>