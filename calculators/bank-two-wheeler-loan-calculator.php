<?php
// Bank configuration data for two-wheeler loans
$bankData = [
    // Private Banks
    'hdfc-bank' => [
        'name' => 'HDFC Bank',
        'type' => 'Private Bank',
        'minRate' => 9.50,
        'maxRate' => 20.00,
        'defaultRate' => 11.00,
        'features' => [
            'Pre-approved loans for existing customers',
            'Instant approval with minimal documentation',
            'Flexible repayment tenure up to 5 years',
            'No prepayment charges after 12 months'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Income proof (salary slips/ITR)',
            'Bank statements (last 3 months)',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'icici-bank' => [
        'name' => 'ICICI Bank',
        'type' => 'Private Bank',
        'minRate' => 9.75,
        'maxRate' => 18.00,
        'defaultRate' => 11.50,
        'features' => [
            'Instant digital two-wheeler loans',
            'Pre-approved loans up to ₹5 lakhs',
            'No collateral required',
            'Quick disbursal within 2 working days'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Good credit history required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle pro forma invoice'
        ]
    ],
    'axis-bank' => [
        'name' => 'Axis Bank',
        'type' => 'Private Bank',
        'minRate' => 10.00,
        'maxRate' => 19.00,
        'defaultRate' => 12.00,
        'features' => [
            'Instant two-wheeler loans',
            'Pre-approved offers for customers',
            'Flexible EMI options',
            'Part prepayment facility'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Latest income proof',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    'kotak-mahindra-bank' => [
        'name' => 'Kotak Mahindra Bank',
        'type' => 'Private Bank',
        'minRate' => 9.99,
        'maxRate' => 17.00,
        'defaultRate' => 11.75,
        'features' => [
            'Quick approval process',
            'Minimal documentation',
            'Competitive interest rates',
            'No hidden charges'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 6 months minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'yes-bank' => [
        'name' => 'YES Bank',
        'type' => 'Private Bank',
        'minRate' => 10.50,
        'maxRate' => 16.00,
        'defaultRate' => 12.50,
        'features' => [
            'Fast loan approval',
            'Attractive interest rates',
            'Flexible tenure options',
            'Doorstep service available'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Income proof (last 3 months)',
            'Bank statements (last 6 months)',
            'Employment certificate',
            'KYC documents'
        ]
    ],
    'bandhan-bank' => [
        'name' => 'Bandhan Bank',
        'type' => 'Private Bank',
        'minRate' => 11.00,
        'maxRate' => 20.00,
        'defaultRate' => 13.50,
        'features' => [
            'Simple documentation process',
            'Quick loan disbursal',
            'Affordable EMIs',
            'Wide network coverage'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Basic credit history required'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'federal-bank' => [
        'name' => 'Federal Bank',
        'type' => 'Private Bank',
        'minRate' => 10.25,
        'maxRate' => 18.00,
        'defaultRate' => 12.75,
        'features' => [
            'Competitive interest rates',
            'Flexible repayment options',
            'Quick processing',
            'Customer-friendly approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit score preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'Identity and address proof',
            'Vehicle proforma'
        ]
    ],
    'indusind-bank' => [
        'name' => 'IndusInd Bank',
        'type' => 'Private Bank',
        'minRate' => 10.00,
        'maxRate' => 19.00,
        'defaultRate' => 12.25,
        'features' => [
            'Digital loan processing',
            'Minimal documentation',
            'Competitive rates',
            'Flexible tenure options'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'KYC documents',
            'Vehicle invoice'
        ]
    ],
    'idfc-first-bank' => [
        'name' => 'IDFC FIRST Bank',
        'type' => 'Private Bank',
        'minRate' => 9.50,
        'maxRate' => 17.50,
        'defaultRate' => 11.25,
        'features' => [
            'Instant approval process',
            'Digital-first approach',
            'Competitive pricing',
            'Hassle-free documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 6 months minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'karnataka-bank' => [
        'name' => 'Karnataka Bank',
        'type' => 'Private Bank',
        'minRate' => 9.75,
        'maxRate' => 18.00,
        'defaultRate' => 11.75,
        'features' => [
            'Quick loan processing',
            'Attractive interest rates',
            'Flexible repayment options',
            'Minimal documentation required'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit score preferred'
        ],
        'documents' => [
            'Income proof (salary slips/ITR)',
            'Bank statements (last 3 months)',
            'Identity and address proof',
            'Vehicle quotation/invoice'
        ]
    ],
    'rbl-bank' => [
        'name' => 'RBL Bank',
        'type' => 'Private Bank',
        'minRate' => 11.50,
        'maxRate' => 21.00,
        'defaultRate' => 14.00,
        'features' => [
            'Quick loan approval',
            'Flexible EMI options',
            'Minimal processing fees',
            'Customer support'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'jammu-kashmir-bank' => [
        'name' => 'Jammu & Kashmir Bank',
        'type' => 'Private Bank',
        'minRate' => 10.25,
        'maxRate' => 17.50,
        'defaultRate' => 12.00,
        'features' => [
            'Regional bank with local expertise',
            'Competitive interest rates',
            'Flexible repayment options',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'karur-vysya-bank' => [
        'name' => 'Karur Vysya Bank',
        'type' => 'Private Bank',
        'minRate' => 10.50,
        'maxRate' => 18.00,
        'defaultRate' => 12.25,
        'features' => [
            'South India focused banking',
            'Attractive interest rates',
            'Simple documentation',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle proforma invoice'
        ]
    ],
    'south-indian-bank' => [
        'name' => 'South Indian Bank',
        'type' => 'Private Bank',
        'minRate' => 10.75,
        'maxRate' => 18.50,
        'defaultRate' => 12.50,
        'features' => [
            'Regional presence in South India',
            'Customer-centric approach',
            'Flexible loan terms',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹14,000 per month',
            'Employment: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'csb-bank' => [
        'name' => 'CSB Bank',
        'type' => 'Private Bank',
        'minRate' => 10.50,
        'maxRate' => 18.50,
        'defaultRate' => 12.75,
        'features' => [
            'Quick loan processing',
            'Competitive interest rates',
            'Flexible tenure options',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'city-union-bank' => [
        'name' => 'City Union Bank',
        'type' => 'Private Bank',
        'minRate' => 10.75,
        'maxRate' => 19.00,
        'defaultRate' => 13.00,
        'features' => [
            'Regional bank with strong presence',
            'Attractive rates for two-wheelers',
            'Quick approval process',
            'Customer-friendly terms'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹14,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'dcb-bank' => [
        'name' => 'DCB Bank',
        'type' => 'Private Bank',
        'minRate' => 11.00,
        'maxRate' => 19.50,
        'defaultRate' => 13.25,
        'features' => [
            'Digital loan processing',
            'Flexible repayment options',
            'Competitive rates',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹16,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle invoice'
        ]
    ],
    'dhanlaxmi-bank' => [
        'name' => 'Dhanlaxmi Bank',
        'type' => 'Private Bank',
        'minRate' => 11.25,
        'maxRate' => 20.00,
        'defaultRate' => 13.50,
        'features' => [
            'South India focused banking',
            'Personalized service',
            'Flexible loan terms',
            'Competitive pricing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit profile required'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'nainital-bank' => [
        'name' => 'Nainital Bank',
        'type' => 'Private Bank',
        'minRate' => 10.25,
        'maxRate' => 17.75,
        'defaultRate' => 12.50,
        'features' => [
            'Regional bank with local expertise',
            'Attractive interest rates',
            'Quick processing',
            'Customer-centric approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹14,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'tamilnad-mercantile-bank' => [
        'name' => 'Tamilnad Mercantile Bank',
        'type' => 'Private Bank',
        'minRate' => 10.50,
        'maxRate' => 18.25,
        'defaultRate' => 12.75,
        'features' => [
            'Strong presence in Tamil Nadu',
            'Competitive rates',
            'Quick loan approval',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit history required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements (last 3 months)',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'idbi-bank' => [
        'name' => 'IDBI Bank',
        'type' => 'Private Bank',
        'minRate' => 10.00,
        'maxRate' => 17.50,
        'defaultRate' => 12.25,
        'features' => [
            'Pan-India presence',
            'Competitive interest rates',
            'Flexible tenure options',
            'Digital loan processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    'standard-chartered-bank' => [
        'name' => 'Standard Chartered Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.50,
        'defaultRate' => 11.50,
        'features' => [
            'International banking standards',
            'Premium customer service',
            'Competitive rates',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Excellent credit score required'
        ],
        'documents' => [
            'Income proof (last 3 months)',
            'Bank statements',
            'Identity and address proof',
            'Vehicle invoice'
        ]
    ],
    'citibank' => [
        'name' => 'Citibank',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.75,
        'defaultRate' => 11.75,
        'features' => [
            'Global banking expertise',
            'Premium banking services',
            'Attractive rates for qualified customers',
            'Digital loan processing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 2 years minimum',
            'Excellent credit history'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'hsbc-bank' => [
        'name' => 'HSBC Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 17.00,
        'defaultRate' => 12.00,
        'features' => [
            'International banking standards',
            'Premium service quality',
            'Competitive interest rates',
            'Flexible repayment terms'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹28,000 per month',
            'Work experience: 2 years minimum',
            'High credit score required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements (last 6 months)',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'dbs-bank-india' => [
        'name' => 'DBS Bank India',
        'type' => 'Foreign Bank',
        'minRate' => 10.00,
        'maxRate' => 17.25,
        'defaultRate' => 12.25,
        'features' => [
            'Digital-first banking approach',
            'Innovative loan products',
            'Quick approval process',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 1 year minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'catholic-syrian-bank' => [
        'name' => 'Catholic Syrian Bank',
        'type' => 'Private Bank',
        'minRate' => 11.00,
        'maxRate' => 19.00,
        'defaultRate' => 13.25,
        'features' => [
            'Strong presence in Kerala',
            'Personalized banking services',
            'Flexible loan terms',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹14,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    // Public Sector Banks
    'state-bank-of-india' => [
        'name' => 'State Bank of India (SBI)',
        'type' => 'Public Sector Bank',
        'minRate' => 10.00,
        'maxRate' => 16.00,
        'defaultRate' => 12.00,
        'features' => [
            'Largest banking network',
            'Competitive interest rates',
            'Flexible repayment options',
            'Trusted brand with decades of experience'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 1 year minimum',
            'Basic credit history required'
        ],
        'documents' => [
            'Income proof (salary slips/ITR)',
            'Bank statements (last 6 months)',
            'Identity and address proof',
            'Vehicle quotation/invoice'
        ]
    ],
    'punjab-national-bank' => [
        'name' => 'Punjab National Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.50,
        'maxRate' => 17.00,
        'defaultRate' => 12.50,
        'features' => [
            'Wide branch network',
            'Affordable interest rates',
            'Simple documentation',
            'Government bank reliability'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Stable income source'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    'bank-of-baroda' => [
        'name' => 'Bank of Baroda',
        'type' => 'Public Sector Bank',
        'minRate' => 10.25,
        'maxRate' => 16.50,
        'defaultRate' => 12.75,
        'features' => [
            'International presence',
            'Competitive rates',
            'Flexible tenure options',
            'Strong customer service'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit score preferred'
        ],
        'documents' => [
            'Salary certificates',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'canara-bank' => [
        'name' => 'Canara Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.75,
        'maxRate' => 17.25,
        'defaultRate' => 13.00,
        'features' => [
            'Established banking solutions',
            'Reasonable interest rates',
            'Wide accessibility',
            'Customer-focused services'
        ],
        'eligibility' => [
            'Age: 18-62 years',
            'Minimum income: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Regular income proof'
        ],
        'documents' => [
            'Income proof documents',
            'Bank account statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'indian-bank' => [
        'name' => 'Indian Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.50,
        'maxRate' => 16.75,
        'defaultRate' => 12.25,
        'features' => [
            'Heritage banking institution',
            'Affordable loan rates',
            'Simple application process',
            'Reliable customer service'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 1 year minimum',
            'Basic documentation required'
        ],
        'documents' => [
            'Income certificates',
            'Bank statements',
            'Identity documents',
            'Vehicle invoice'
        ]
    ],
    'bank-of-india' => [
        'name' => 'Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 10.50,
        'maxRate' => 17.00,
        'defaultRate' => 12.75,
        'features' => [
            'Strong nationwide presence',
            'Competitive interest rates',
            'Government bank security',
            'Flexible repayment terms'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Stable income required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'bank-of-maharashtra' => [
        'name' => 'Bank of Maharashtra',
        'type' => 'Public Sector Bank',
        'minRate' => 10.75,
        'maxRate' => 17.50,
        'defaultRate' => 13.00,
        'features' => [
            'Strong presence in Maharashtra',
            'Customer-friendly approach',
            'Affordable rates',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Minimum income: ₹14,000 per month',
            'Work experience: 1 year minimum',
            'Basic credit history'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'central-bank-of-india' => [
        'name' => 'Central Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 10.25,
        'maxRate' => 16.75,
        'defaultRate' => 12.50,
        'features' => [
            'Heritage banking institution',
            'Wide branch network',
            'Competitive rates',
            'Government bank trust'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Stable employment'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 6 months)',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    'indian-overseas-bank' => [
        'name' => 'Indian Overseas Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.50,
        'maxRate' => 17.25,
        'defaultRate' => 12.75,
        'features' => [
            'International banking experience',
            'Competitive interest rates',
            'Flexible loan terms',
            'Government bank reliability'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'punjab-sind-bank' => [
        'name' => 'Punjab & Sind Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.75,
        'maxRate' => 17.00,
        'defaultRate' => 13.00,
        'features' => [
            'Strong presence in North India',
            'Customer-centric services',
            'Affordable rates',
            'Simple documentation'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Minimum income: ₹14,000 per month',
            'Employment: 1 year minimum',
            'Stable income source'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'uco-bank' => [
        'name' => 'UCO Bank',
        'type' => 'Public Sector Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 12.75,
        'features' => [
            'Legacy banking institution',
            'Wide branch network',
            'Competitive rates',
            'Government bank security'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Basic credit requirements'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    'union-bank-of-india' => [
        'name' => 'Union Bank of India',
        'type' => 'Public Sector Bank',
        'minRate' => 10.25,
        'maxRate' => 16.50,
        'defaultRate' => 12.50,
        'features' => [
            'Pan-India presence',
            'Competitive interest rates',
            'Flexible repayment options',
            'Trusted government bank'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history preferred'
        ],
        'documents' => [
            'Income proof (last 3 months)',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    // NBFCs (Non-Banking Financial Companies)
    'bajaj-finserv' => [
        'name' => 'Bajaj Finserv',
        'type' => 'NBFC',
        'minRate' => 11.00,
        'maxRate' => 25.00,
        'defaultRate' => 15.00,
        'features' => [
            'Instant loan approval',
            'Minimal documentation',
            'Digital application process',
            'Wide dealer network'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ required'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'tata-capital' => [
        'name' => 'Tata Capital',
        'type' => 'NBFC',
        'minRate' => 10.50,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Trusted Tata brand',
            'Quick processing',
            'Competitive rates',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'mahindra-finance' => [
        'name' => 'Mahindra Finance',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 20.00,
        'defaultRate' => 14.50,
        'features' => [
            'Specialized vehicle financing',
            'Rural and urban presence',
            'Flexible EMI options',
            'Quick loan disbursal'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 6 months minimum',
            'Basic credit check'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle invoice'
        ]
    ],
    'l-t-finance' => [
        'name' => 'L&T Finance',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.00,
        'features' => [
            'Established NBFC brand',
            'Quick approval process',
            'Competitive pricing',
            'Customer-centric approach'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income proof documents',
            'Bank account statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'shriram-finance' => [
        'name' => 'Shriram Finance',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 22.00,
        'defaultRate' => 16.00,
        'features' => [
            'Vehicle finance specialist',
            'Wide network coverage',
            'Flexible eligibility criteria',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹12,000 per month',
            'Work experience: 6 months minimum',
            'Basic income proof'
        ],
        'documents' => [
            'Income certificates',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'muthoot-finance' => [
        'name' => 'Muthoot Finance',
        'type' => 'NBFC',
        'minRate' => 14.00,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'Gold loan specialists also in vehicle finance',
            'Pan-India presence',
            'Simple documentation',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹10,000 per month',
            'Employment: 3 months minimum',
            'Basic eligibility criteria'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle proforma'
        ]
    ],
    // Small Finance Banks
    'au-small-finance-bank' => [
        'name' => 'AU Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 11.00,
        'maxRate' => 22.00,
        'defaultRate' => 14.50,
        'features' => [
            'Digital-first approach',
            'Quick loan approval',
            'Competitive rates',
            'Customer-friendly policies'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'equitas-small-finance-bank' => [
        'name' => 'Equitas Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 10.99,
        'maxRate' => 21.00,
        'defaultRate' => 14.00,
        'features' => [
            'Inclusive banking approach',
            'Simple loan process',
            'Reasonable interest rates',
            'Strong customer support'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 6 months minimum',
            'Basic credit history'
        ],
        'documents' => [
            'Income certificates',
            'Bank account statements',
            'KYC documents',
            'Vehicle invoice'
        ]
    ],
    'ujjivan-small-finance-bank' => [
        'name' => 'Ujjivan Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.00,
        'maxRate' => 20.00,
        'defaultRate' => 15.00,
        'features' => [
            'Microfinance heritage',
            'Inclusive lending policies',
            'Quick processing',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹10,000 per month',
            'Work experience: 6 months minimum',
            'Basic documentation'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    
    // Local Area Banks
    'coastal-lab' => [
        'name' => 'Coastal Local Area Bank',
        'type' => 'Local Area Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.00,
        'features' => [
            'Regional banking focus',
            'Local market expertise',
            'Customer-friendly approach',
            'Flexible loan terms'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹12,000 per month',
            'Local area residence preferred',
            'Basic credit history'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'krishna-bhima-lab' => [
        'name' => 'Krishna Bhima Samruddhi Local Area Bank',
        'type' => 'Local Area Bank',
        'minRate' => 11.75,
        'maxRate' => 19.50,
        'defaultRate' => 14.25,
        'features' => [
            'Regional presence in Karnataka',
            'Agriculture-focused banking',
            'Competitive rates',
            'Simple documentation'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹12,000 per month',
            'Regional area residence',
            'Stable income source'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    
    // Cooperative Banks
    'saraswat-cooperative-bank' => [
        'name' => 'Saraswat Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 11.00,
        'maxRate' => 18.50,
        'defaultRate' => 13.50,
        'features' => [
            'Community-focused banking',
            'Competitive interest rates',
            'Personalized service',
            'Local presence'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'nkgsb-cooperative-bank' => [
        'name' => 'NKGSB Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 11.25,
        'maxRate' => 18.75,
        'defaultRate' => 13.75,
        'features' => [
            'Mumbai-based cooperative bank',
            'Member-focused services',
            'Attractive rates',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'cosmos-cooperative-bank' => [
        'name' => 'Cosmos Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.00,
        'features' => [
            'Community banking focus',
            'Flexible loan terms',
            'Personalized customer service',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹14,000 per month',
            'Employment: 1 year minimum',
            'Basic credit requirements'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    'abhyudaya-cooperative-bank' => [
        'name' => 'Abhyudaya Cooperative Bank',
        'type' => 'Cooperative Bank',
        'minRate' => 11.00,
        'maxRate' => 18.25,
        'defaultRate' => 13.25,
        'features' => [
            'Mumbai-based cooperative',
            'Member-centric approach',
            'Competitive interest rates',
            'Simple loan process'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    
    // Payment Banks
    'airtel-payments-bank' => [
        'name' => 'Airtel Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 12.00,
        'maxRate' => 20.00,
        'defaultRate' => 15.00,
        'features' => [
            'Digital-first banking',
            'Mobile-based services',
            'Quick loan processing',
            'Telecom network integration'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹10,000 per month',
            'Airtel customer preferred',
            'Basic KYC required'
        ],
        'documents' => [
            'Income proof',
            'Aadhaar card',
            'PAN card',
            'Vehicle quotation'
        ]
    ],
    'india-post-payments-bank' => [
        'name' => 'India Post Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 12.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.50,
        'features' => [
            'Government-backed institution',
            'Extensive branch network',
            'Doorstep banking services',
            'Simple documentation'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹8,000 per month',
            'Indian resident',
            'Basic credit history'
        ],
        'documents' => [
            'Income certificate',
            'Identity proof',
            'Address proof',
            'Vehicle documents'
        ]
    ],
    'fino-payments-bank' => [
        'name' => 'Fino Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 13.00,
        'maxRate' => 21.00,
        'defaultRate' => 16.00,
        'features' => [
            'Financial inclusion focus',
            'Rural and semi-urban presence',
            'Digital banking solutions',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Minimum income: ₹10,000 per month',
            'Employment: 6 months minimum',
            'Basic documentation'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'paytm-payments-bank' => [
        'name' => 'Paytm Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 12.25,
        'maxRate' => 19.75,
        'defaultRate' => 15.25,
        'features' => [
            'Digital ecosystem integration',
            'Instant loan processing',
            'Paytm wallet integration',
            'Mobile-first approach'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹12,000 per month',
            'Paytm user preferred',
            'Digital transaction history'
        ],
        'documents' => [
            'Income proof',
            'Identity documents',
            'Address proof',
            'Vehicle quotation'
        ]
    ],
    'jio-payments-bank' => [
        'name' => 'Jio Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 12.75,
        'maxRate' => 20.25,
        'defaultRate' => 15.75,
        'features' => [
            'Reliance ecosystem integration',
            'Digital banking services',
            'Quick loan approval',
            'Jio network benefits'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Minimum income: ₹11,000 per month',
            'Jio customer preferred',
            'Stable income source'
        ],
        'documents' => [
            'Income documents',
            'KYC proof',
            'Address verification',
            'Vehicle documents'
        ]
    ],
    'nsdl-payments-bank' => [
        'name' => 'NSDL Payments Bank',
        'type' => 'Payment Bank',
        'minRate' => 13.25,
        'maxRate' => 21.25,
        'defaultRate' => 16.25,
        'features' => [
            'Capital market expertise',
            'Digital payment solutions',
            'Quick processing',
            'Secure transactions'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    
    // Development Financial Institutions
    'nabard' => [
        'name' => 'NABARD',
        'type' => 'Development Financial Institution',
        'minRate' => 9.50,
        'maxRate' => 15.00,
        'defaultRate' => 11.50,
        'features' => [
            'Agriculture development focus',
            'Subsidized interest rates',
            'Government schemes integration',
            'Rural development support'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Rural/agricultural background',
            'Minimum income: ₹8,000 per month',
            'Agricultural activities involvement'
        ],
        'documents' => [
            'Income certificate',
            'Agricultural documents',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'exim-bank' => [
        'name' => 'Export-Import Bank of India',
        'type' => 'Development Financial Institution',
        'minRate' => 10.00,
        'maxRate' => 16.00,
        'defaultRate' => 12.00,
        'features' => [
            'Export-import financing expertise',
            'International trade support',
            'Competitive rates',
            'Government backing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Export-import business preferred',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Business proof',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'nhb' => [
        'name' => 'National Housing Bank',
        'type' => 'Development Financial Institution',
        'minRate' => 9.75,
        'maxRate' => 15.50,
        'defaultRate' => 11.75,
        'features' => [
            'Housing finance specialization',
            'Government institution',
            'Subsidized rates',
            'Housing scheme integration'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Minimum income: ₹15,000 per month',
            'Housing loan customers preferred',
            'Stable employment'
        ],
        'documents' => [
            'Income proof',
            'Housing documents',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'sidbi' => [
        'name' => 'Small Industries Development Bank of India',
        'type' => 'Development Financial Institution',
        'minRate' => 10.25,
        'maxRate' => 16.50,
        'defaultRate' => 12.25,
        'features' => [
            'MSME sector focus',
            'Business development support',
            'Competitive interest rates',
            'Government schemes'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'MSME business ownership',
            'Minimum income: ₹18,000 per month',
            'Business establishment proof'
        ],
        'documents' => [
            'Business documents',
            'Income proof',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    
    // Regional Rural Banks
    'assam-gramin-vikash-bank' => [
        'name' => 'Assam Gramin Vikash Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.50,
        'maxRate' => 17.00,
        'defaultRate' => 13.00,
        'features' => [
            'Regional presence in Assam',
            'Rural development focus',
            'Government-sponsored bank',
            'Agricultural sector support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Assam region residence',
            'Minimum income: ₹8,000 per month',
            'Rural/agricultural background'
        ],
        'documents' => [
            'Income certificate',
            'Residence proof',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'andhra-pradesh-grameena-vikas-bank' => [
        'name' => 'Andhra Pradesh Grameena Vikas Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.75,
        'maxRate' => 17.50,
        'defaultRate' => 13.25,
        'features' => [
            'Andhra Pradesh regional bank',
            'Rural banking expertise',
            'Agricultural loan specialization',
            'Government backing'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'AP region residence',
            'Minimum income: ₹9,000 per month',
            'Rural sector involvement'
        ],
        'documents' => [
            'Income proof',
            'Regional residence proof',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'baroda-gujarat-gramin-bank' => [
        'name' => 'Baroda Gujarat Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.25,
        'maxRate' => 16.75,
        'defaultRate' => 12.75,
        'features' => [
            'Gujarat regional focus',
            'Rural development banking',
            'Agricultural sector expertise',
            'Cooperative structure'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Gujarat region residence',
            'Minimum income: ₹10,000 per month',
            'Agricultural/rural activities'
        ],
        'documents' => [
            'Income documents',
            'Residence certificate',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    'aryavart-bank' => [
        'name' => 'Aryavart Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.50,
        'maxRate' => 17.25,
        'defaultRate' => 13.00,
        'features' => [
            'Regional banking services',
            'Rural area specialization',
            'Government support',
            'Agricultural focus'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Regional area residence',
            'Minimum income: ₹8,500 per month',
            'Rural background preferred'
        ],
        'documents' => [
            'Income certificate',
            'Address proof',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'punjab-gramin-bank' => [
        'name' => 'Punjab Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.00,
        'maxRate' => 16.50,
        'defaultRate' => 12.50,
        'features' => [
            'Punjab regional presence',
            'Agricultural banking expertise',
            'Rural development support',
            'Government-sponsored'
        ],
        'eligibility' => [
            'Age: 18-65 years',
            'Punjab region residence',
            'Minimum income: ₹10,000 per month',
            'Agricultural sector involvement'
        ],
        'documents' => [
            'Income proof',
            'Regional residence proof',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'karnataka-vikas-gramin-bank' => [
        'name' => 'Karnataka Vikas Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.75,
        'maxRate' => 17.00,
        'defaultRate' => 13.25,
        'features' => [
            'Karnataka regional bank',
            'Rural development focus',
            'Agricultural sector support',
            'Government backing'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Karnataka region residence',
            'Minimum income: ₹9,000 per month',
            'Rural/agricultural background'
        ],
        'documents' => [
            'Income documents',
            'Residence certificate',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'tamil-nadu-grama-bank' => [
        'name' => 'Tamil Nadu Grama Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 11.00,
        'maxRate' => 17.50,
        'defaultRate' => 13.50,
        'features' => [
            'Tamil Nadu regional presence',
            'Rural banking services',
            'Agricultural loan expertise',
            'Government support'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Tamil Nadu region residence',
            'Minimum income: ₹9,500 per month',
            'Rural sector involvement'
        ],
        'documents' => [
            'Income certificate',
            'Regional residence proof',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'kerala-gramin-bank' => [
        'name' => 'Kerala Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.50,
        'maxRate' => 17.25,
        'defaultRate' => 13.00,
        'features' => [
            'Kerala regional focus',
            'Rural development banking',
            'Agricultural sector expertise',
            'Government-sponsored'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Kerala region residence',
            'Minimum income: ₹9,000 per month',
            'Rural background preferred'
        ],
        'documents' => [
            'Income proof',
            'Address verification',
            'Identity documents',
            'Vehicle proforma'
        ]
    ],
    'maharashtra-gramin-bank' => [
        'name' => 'Maharashtra Gramin Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.25,
        'maxRate' => 16.75,
        'defaultRate' => 12.75,
        'features' => [
            'Maharashtra regional bank',
            'Rural area specialization',
            'Agricultural focus',
            'Government support'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Maharashtra region residence',
            'Minimum income: ₹10,000 per month',
            'Rural sector involvement'
        ],
        'documents' => [
            'Income documents',
            'Residence certificate',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'odisha-gramya-bank' => [
        'name' => 'Odisha Gramya Bank',
        'type' => 'Regional Rural Bank',
        'minRate' => 10.75,
        'maxRate' => 17.25,
        'defaultRate' => 13.25,
        'features' => [
            'Odisha regional presence',
            'Rural banking expertise',
            'Agricultural sector support',
            'Government backing'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Odisha region residence',
            'Minimum income: ₹8,500 per month',
            'Rural/agricultural background'
        ],
        'documents' => [
            'Income certificate',
            'Regional residence proof',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    
    // Additional Small Finance Banks
    'capital-small-finance-bank' => [
        'name' => 'Capital Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.50,
        'maxRate' => 21.00,
        'defaultRate' => 16.00,
        'features' => [
            'Small business focus',
            'Quick loan processing',
            'Flexible repayment terms',
            'Digital banking services'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'esaf-small-finance-bank' => [
        'name' => 'ESAF Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.25,
        'maxRate' => 20.50,
        'defaultRate' => 15.75,
        'features' => [
            'Microfinance background',
            'Financial inclusion focus',
            'Rural and urban presence',
            'Customer-centric approach'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 6 months minimum',
            'Basic credit history'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'suryoday-small-finance-bank' => [
        'name' => 'Suryoday Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.75,
        'maxRate' => 21.50,
        'defaultRate' => 16.25,
        'features' => [
            'Small business lending',
            'Digital loan processing',
            'Flexible terms',
            'Quick approval'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income proof',
            'Bank statements (last 3 months)',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'utkarsh-small-finance-bank' => [
        'name' => 'Utkarsh Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.00,
        'maxRate' => 20.25,
        'defaultRate' => 15.50,
        'features' => [
            'Rural and semi-urban focus',
            'Financial inclusion mission',
            'Quick processing',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 6 months minimum',
            'Basic documentation'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'slice-small-finance-bank' => [
        'name' => 'Slice Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 13.50,
        'maxRate' => 22.00,
        'defaultRate' => 17.00,
        'features' => [
            'Digital-first approach',
            'Fintech background',
            'Quick loan approval',
            'Mobile banking focus'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Good digital footprint'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'jana-small-finance-bank' => [
        'name' => 'Jana Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.50,
        'maxRate' => 21.25,
        'defaultRate' => 16.00,
        'features' => [
            'Microfinance heritage',
            'Small business focus',
            'Rural presence',
            'Inclusive lending'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹10,000 per month',
            'Employment: 6 months minimum',
            'Basic credit requirements'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'shivalik-small-finance-bank' => [
        'name' => 'Shivalik Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.25,
        'maxRate' => 20.75,
        'defaultRate' => 15.75,
        'features' => [
            'Regional presence in North India',
            'Small business lending',
            'Agricultural focus',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹14,000 per month',
            'Work experience: 1 year minimum',
            'Regional presence preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'unity-small-finance-bank' => [
        'name' => 'Unity Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.75,
        'maxRate' => 21.00,
        'defaultRate' => 16.25,
        'features' => [
            'Cooperative bank background',
            'Member-focused services',
            'Competitive rates',
            'Simple procedures'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'Minimum income: ₹13,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'Identity and address proof',
            'Vehicle proforma'
        ]
    ],
    'fincare-small-finance-bank' => [
        'name' => 'Fincare Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.75,
        'features' => [
            'Financial inclusion focus',
            'Rural and urban presence',
            'Quick loan approval',
            'Digital services'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 6 months minimum',
            'Basic credit profile'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'northeast-small-finance-bank' => [
        'name' => 'Northeast Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.00,
        'maxRate' => 20.00,
        'defaultRate' => 15.50,
        'features' => [
            'Northeast India focus',
            'Regional banking expertise',
            'Small business support',
            'Government schemes integration'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Northeast region residence',
            'Minimum income: ₹10,000 per month',
            'Regional employment'
        ],
        'documents' => [
            'Income certificate',
            'Regional residence proof',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'north-east-small-finance-bank' => [
        'name' => 'North East Small Finance Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 12.25,
        'maxRate' => 20.25,
        'defaultRate' => 15.75,
        'features' => [
            'North Eastern states presence',
            'Regional development focus',
            'Inclusive banking',
            'Agricultural support'
        ],
        'eligibility' => [
            'Age: 18-58 years',
            'North East region residence',
            'Minimum income: ₹10,000 per month',
            'Local employment preferred'
        ],
        'documents' => [
            'Income documents',
            'Regional address proof',
            'Identity verification',
            'Vehicle proforma'
        ]
    ],
    'poorvanchal-bank' => [
        'name' => 'Poorvanchal Bank',
        'type' => 'Small Finance Bank',
        'minRate' => 11.75,
        'maxRate' => 19.75,
        'defaultRate' => 15.25,
        'features' => [
            'Eastern UP and Bihar focus',
            'Rural banking expertise',
            'Agricultural sector support',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Eastern region residence',
            'Minimum income: ₹9,000 per month',
            'Agricultural/rural background'
        ],
        'documents' => [
            'Income proof',
            'Regional residence certificate',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    
    // Additional NBFCs
    'bajaj-finance' => [
        'name' => 'Bajaj Finance',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 19.50,
        'defaultRate' => 14.50,
        'features' => [
            'Leading NBFC in India',
            'Quick loan processing',
            'Flexible repayment options',
            'Wide network presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'mahindra-mahindra-financial' => [
        'name' => 'Mahindra & Mahindra Financial Services',
        'type' => 'NBFC',
        'minRate' => 11.75,
        'maxRate' => 20.00,
        'defaultRate' => 15.00,
        'features' => [
            'Vehicle finance specialist',
            'Strong rural presence',
            'Competitive rates',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'muthoot-fincorp' => [
        'name' => 'Muthoot Fincorp',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 21.00,
        'defaultRate' => 15.50,
        'features' => [
            'Vehicle finance expertise',
            'Pan-India presence',
            'Flexible loan terms',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹16,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 600+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements (last 3 months)',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'hdfc-ltd' => [
        'name' => 'HDFC Ltd',
        'type' => 'NBFC',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 13.50,
        'features' => [
            'Leading housing finance company',
            'Competitive interest rates',
            'Strong brand reputation',
            'Excellent customer service'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 2 years minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 6 months)',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'hdb-financial-services' => [
        'name' => 'HDB Financial Services',
        'type' => 'NBFC',
        'minRate' => 11.25,
        'maxRate' => 18.75,
        'defaultRate' => 14.25,
        'features' => [
            'HDFC Bank subsidiary',
            'Digital loan processing',
            'Competitive rates',
            'Wide product range'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'lic-housing-finance' => [
        'name' => 'LIC Housing Finance',
        'type' => 'NBFC',
        'minRate' => 10.75,
        'maxRate' => 17.25,
        'defaultRate' => 13.25,
        'features' => [
            'LIC backing and trust',
            'Competitive interest rates',
            'Pan-India presence',
            'Strong financial position'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 2 years minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'aditya-birla-finance' => [
        'name' => 'Aditya Birla Finance',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.50,
        'features' => [
            'Aditya Birla Group backing',
            'Digital-first approach',
            'Quick loan processing',
            'Flexible repayment terms'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹18,000 per month',
            'Work experience: 1 year minimum',
            'Credit score: 650+ required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'fullerton-india' => [
        'name' => 'Fullerton India',
        'type' => 'NBFC',
        'minRate' => 12.25,
        'maxRate' => 20.50,
        'defaultRate' => 15.75,
        'features' => [
            'Singapore-based Temasek backing',
            'Strong credit assessment',
            'Flexible loan products',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹16,000 per month',
            'Employment: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Salary slips/ITR',
            'Bank statements',
            'Identity and address proof',
            'Vehicle proforma'
        ]
    ],
    'hero-fincorp' => [
        'name' => 'Hero FinCorp',
        'type' => 'NBFC',
        'minRate' => 11.75,
        'maxRate' => 19.50,
        'defaultRate' => 14.75,
        'features' => [
            'Hero Group backing',
            'Two-wheeler finance specialist',
            'Rural and urban presence',
            'Quick approval process'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 600+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'cholamandalam-finance' => [
        'name' => 'Cholamandalam Investment and Finance',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 20.25,
        'defaultRate' => 15.25,
        'features' => [
            'Vehicle finance leader',
            'Strong presence in South India',
            'Competitive rates',
            'Wide dealer network'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Work experience: 1 year minimum',
            'Basic credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 3 months)',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    
    // Popular Fintech Companies
    'payme-india' => [
        'name' => 'PayMe India',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 24.00,
        'defaultRate' => 18.00,
        'features' => [
            'Digital-first lending',
            'Quick approval process',
            'Mobile app based',
            'Minimal documentation'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 6 months minimum',
            'Good digital footprint'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements (digital)',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'kreditbee' => [
        'name' => 'KreditBee',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 25.00,
        'defaultRate' => 19.00,
        'features' => [
            'AI-powered lending',
            'Instant loan approval',
            'Mobile-first platform',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 3 months minimum',
            'Credit score: 600+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements (digital)',
            'Identity documents',
            'Vehicle proforma'
        ]
    ],
    'moneytap' => [
        'name' => 'MoneyTap',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 23.00,
        'defaultRate' => 17.50,
        'features' => [
            'Credit line facility',
            'Instant approval',
            'No collateral required',
            'Digital processing'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Salary slips (last 3 months)',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'cashe' => [
        'name' => 'CASHe',
        'type' => 'Fintech Company',
        'minRate' => 14.50,
        'maxRate' => 26.00,
        'defaultRate' => 20.00,
        'features' => [
            'Social credit scoring',
            'Quick disbursal',
            'Mobile app platform',
            'Flexible tenure'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 6 months minimum',
            'Good social credit score'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'smartcoin' => [
        'name' => 'SmartCoin',
        'type' => 'Fintech Company',
        'minRate' => 13.75,
        'maxRate' => 24.50,
        'defaultRate' => 18.50,
        'features' => [
            'AI-driven lending',
            'Quick loan processing',
            'Digital documentation',
            'Flexible repayment options'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹16,000 per month',
            'Employment: 3 months minimum',
            'Digital transaction history'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements (digital)',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'creditbee' => [
        'name' => 'CreditBee',
        'type' => 'Fintech Company',
        'minRate' => 14.25,
        'maxRate' => 25.50,
        'defaultRate' => 19.25,
        'features' => [
            'Instant loan approval',
            'Mobile-based platform',
            'AI credit assessment',
            'Quick disbursal'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 2 months minimum',
            'Good app-based credit score'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'moneyview' => [
        'name' => 'MoneyView',
        'type' => 'Fintech Company',
        'minRate' => 13.25,
        'maxRate' => 23.75,
        'defaultRate' => 18.00,
        'features' => [
            'Personal finance platform',
            'Quick loan processing',
            'Digital-first approach',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 6 months minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements (digital)',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'nira' => [
        'name' => 'Nira',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 24.75,
        'defaultRate' => 18.75,
        'features' => [
            'Alternative credit scoring',
            'Quick approval',
            'Mobile app based',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 3 months minimum',
            'Alternative credit profile'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    
    // Remaining NBFCs
    'indiabulls-housing-finance' => [
        'name' => 'Indiabulls Housing Finance',
        'type' => 'NBFC',
        'minRate' => 11.00,
        'maxRate' => 18.00,
        'defaultRate' => 14.00,
        'features' => [
            'Housing finance specialist',
            'Quick loan processing',
            'Competitive rates',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 23-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'pnb-housing-finance' => [
        'name' => 'PNB Housing Finance',
        'type' => 'NBFC',
        'minRate' => 10.75,
        'maxRate' => 17.50,
        'defaultRate' => 13.50,
        'features' => [
            'PNB backing',
            'Housing finance expertise',
            'Competitive interest rates',
            'Strong market presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹22,000 per month',
            'Employment: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'repco-home-finance' => [
        'name' => 'Repco Home Finance',
        'type' => 'NBFC',
        'minRate' => 11.25,
        'maxRate' => 18.25,
        'defaultRate' => 14.25,
        'features' => [
            'South India focus',
            'Housing finance specialist',
            'Competitive rates',
            'Regional expertise'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'manappuram-finance' => [
        'name' => 'Manappuram Finance',
        'type' => 'NBFC',
        'minRate' => 12.50,
        'maxRate' => 20.00,
        'defaultRate' => 15.50,
        'features' => [
            'Gold loan specialist',
            'Vehicle finance services',
            'Quick processing',
            'Strong South India presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Basic credit requirements'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'home-credit-india' => [
        'name' => 'Home Credit India',
        'type' => 'NBFC',
        'minRate' => 13.00,
        'maxRate' => 22.00,
        'defaultRate' => 16.50,
        'features' => [
            'Consumer finance specialist',
            'Point-of-sale financing',
            'Quick approval',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 6 months minimum',
            'Basic credit history'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity and address proof',
            'Vehicle proforma'
        ]
    ],
    'iifl-finance' => [
        'name' => 'IIFL Finance',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.50,
        'features' => [
            'Financial services group',
            'Multiple loan products',
            'Competitive rates',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Good credit score'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'iifl-home-finance' => [
        'name' => 'IIFL Home Finance',
        'type' => 'NBFC',
        'minRate' => 10.50,
        'maxRate' => 17.75,
        'defaultRate' => 13.75,
        'features' => [
            'Housing finance specialist',
            'IIFL group backing',
            'Competitive rates',
            'Pan-India operations'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Credit score: 700+ preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'tvs-credit' => [
        'name' => 'TVS Credit Services',
        'type' => 'NBFC',
        'minRate' => 11.75,
        'maxRate' => 19.50,
        'defaultRate' => 14.75,
        'features' => [
            'TVS Group backing',
            'Vehicle finance expertise',
            'Strong dealer network',
            'Quick approval'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity and address proof',
            'Vehicle proforma'
        ]
    ],
    'reliance-capital' => [
        'name' => 'Reliance Capital',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 20.00,
        'defaultRate' => 15.00,
        'features' => [
            'Reliance Group backing',
            'Diversified financial services',
            'Pan-India presence',
            'Multiple loan products'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'sundaram-finance' => [
        'name' => 'Sundaram Finance',
        'type' => 'NBFC',
        'minRate' => 11.25,
        'maxRate' => 18.50,
        'defaultRate' => 14.25,
        'features' => [
            'TVS Sundaram Group',
            'Vehicle finance specialist',
            'South India presence',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹16,000 per month',
            'Employment: 1 year minimum',
            'Good credit profile'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    
    // More NBFCs
    'idfc-financial-services' => [
        'name' => 'IDFC Financial Services',
        'type' => 'NBFC',
        'minRate' => 10.75,
        'maxRate' => 17.50,
        'defaultRate' => 13.50,
        'features' => [
            'IDFC Group backing',
            'Infrastructure finance expertise',
            'Competitive rates',
            'Strong financial position'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Excellent credit score'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'jm-financial' => [
        'name' => 'JM Financial Services',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 19.00,
        'defaultRate' => 14.50,
        'features' => [
            'Investment banking heritage',
            'Financial services expertise',
            'Competitive rates',
            'Professional approach'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 2 years minimum',
            'High credit score required'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'poonawalla-fincorp' => [
        'name' => 'Poonawalla Fincorp',
        'type' => 'NBFC',
        'minRate' => 12.25,
        'maxRate' => 20.50,
        'defaultRate' => 15.25,
        'features' => [
            'Poonawalla Group backing',
            'Consumer finance focus',
            'Digital lending',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'northern-arc-capital' => [
        'name' => 'Northern Arc Capital',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 19.50,
        'defaultRate' => 15.00,
        'features' => [
            'Debt platform specialist',
            'Financial inclusion focus',
            'Competitive rates',
            'Technology-driven'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    
    // Major Foreign Banks
    'standard-chartered-bank-foreign' => [
        'name' => 'Standard Chartered Bank (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 9.00,
        'maxRate' => 16.00,
        'defaultRate' => 11.25,
        'features' => [
            'International banking standards',
            'Premium customer service',
            'Global expertise',
            'Competitive rates for HNI'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹50,000 per month',
            'Employment: 3 years minimum',
            'Excellent credit score required'
        ],
        'documents' => [
            'Income proof (last 6 months)',
            'Bank statements',
            'Identity and address proof',
            'Vehicle invoice'
        ]
    ],
    'citibank-foreign' => [
        'name' => 'Citibank (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.50,
        'features' => [
            'Global banking expertise',
            'Premium services',
            'International standards',
            'Exclusive customer base'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'High net worth preferred'
        ],
        'documents' => [
            'Salary slips (last 6 months)',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'hsbc-bank-foreign' => [
        'name' => 'HSBC Bank (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 11.75,
        'features' => [
            'International banking network',
            'Premium banking services',
            'Global standards',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹60,000 per month',
            'Employment: 3 years minimum',
            'Excellent credit profile'
        ],
        'documents' => [
            'Income documents',
            'Bank statements (last 6 months)',
            'Identity and address proof',
            'Vehicle documents'
        ]
    ],
    'dbs-bank-foreign' => [
        'name' => 'DBS Bank (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 16.75,
        'defaultRate' => 12.00,
        'features' => [
            'Singapore banking excellence',
            'Digital innovation',
            'Premium services',
            'Asian market expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹50,000 per month',
            'Employment: 2 years minimum',
            'High credit score required'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    
    // More Foreign Banks
    'barclays-bank-foreign' => [
        'name' => 'Barclays Bank (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 10.00,
        'maxRate' => 17.00,
        'defaultRate' => 12.25,
        'features' => [
            'British banking heritage',
            'International expertise',
            'Premium banking',
            'Global standards'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'Premium customer segment'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'bnp-paribas-foreign' => [
        'name' => 'BNP Paribas (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 10.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.50,
        'features' => [
            'French banking excellence',
            'European standards',
            'Corporate banking focus',
            'International network'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients preferred'
        ],
        'documents' => [
            'Salary certificates',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    'societe-generale-foreign' => [
        'name' => 'Societe Generale (Foreign Operations)',
        'type' => 'Foreign Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 12.75,
        'features' => [
            'French banking tradition',
            'Corporate expertise',
            'International standards',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹80,000 per month',
            'Employment: 3 years minimum',
            'High credit score'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    
    // Major Fintech Companies
    'earlysalary' => [
        'name' => 'EarlySalary',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 24.00,
        'defaultRate' => 18.00,
        'features' => [
            'Digital-first approach',
            'Quick approvals',
            'Mobile app based',
            'Instant disbursals'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 6 months minimum',
            'Good credit score'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity proof',
            'Vehicle invoice'
        ]
    ],
    'flexsalary' => [
        'name' => 'FlexSalary',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 23.50,
        'defaultRate' => 17.50,
        'features' => [
            'Flexible repayment',
            'Digital platform',
            'Quick processing',
            'Mobile-first experience'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 600+'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'kissht' => [
        'name' => 'Kissht',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 19.00,
        'features' => [
            'Digital lending platform',
            'Instant approval',
            'Mobile app based',
            'Millennial focused'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 6 months minimum',
            'Digital savvy customers'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'lazypay' => [
        'name' => 'LazyPay',
        'type' => 'Fintech Company',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.00,
        'features' => [
            'PayU ecosystem',
            'Digital payments focus',
            'Instant credit',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Digital payment users'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    
    // Remaining Major NBFCs
    'bajaj-finance-ltd' => [
        'name' => 'Bajaj Finance Limited',
        'type' => 'NBFC',
        'minRate' => 8.50,
        'maxRate' => 20.00,
        'defaultRate' => 12.50,
        'features' => [
            'India\'s largest NBFC',
            'Quick digital processing',
            'Wide network coverage',
            'Competitive interest rates'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Good credit score required'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity and address proof',
            'Vehicle quotation'
        ]
    ],
    'cholamandalam-investment' => [
        'name' => 'Cholamandalam Investment and Finance',
        'type' => 'NBFC',
        'minRate' => 9.25,
        'maxRate' => 20.50,
        'defaultRate' => 13.75,
        'features' => [
            'Murugappa Group company',
            'Vehicle finance specialist',
            'Pan-India presence',
            'Quick loan processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+ preferred'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'lt-finance-limited' => [
        'name' => 'L&T Finance Limited',
        'type' => 'NBFC',
        'minRate' => 9.50,
        'maxRate' => 18.50,
        'defaultRate' => 13.25,
        'features' => [
            'L&T Group backing',
            'Infrastructure expertise',
            'Strong financial foundation',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 2 years minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'muthoot-finance-limited' => [
        'name' => 'Muthoot Finance Limited',
        'type' => 'NBFC',
        'minRate' => 12.00,
        'maxRate' => 22.00,
        'defaultRate' => 16.50,
        'features' => [
            'Leading gold loan company',
            'Diversified lending',
            'Strong branch network',
            'Quick approvals'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 1 year minimum',
            'Asset backing preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'tata-capital-limited' => [
        'name' => 'Tata Capital Limited',
        'type' => 'NBFC',
        'minRate' => 9.75,
        'maxRate' => 19.25,
        'defaultRate' => 13.50,
        'features' => [
            'Tata Group heritage',
            'Comprehensive financial services',
            'Strong brand trust',
            'Pan-India operations'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Excellent credit score'
        ],
        'documents' => [
            'Salary certificates',
            'Bank statements',
            'Identity and address proof',
            'Vehicle invoice'
        ]
    ],
    
    // More Foreign Banks
    'deutsche-bank' => [
        'name' => 'Deutsche Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.75,
        'features' => [
            'German banking excellence',
            'Investment banking focus',
            'Premium services',
            'International expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'High net worth clients'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'bank-of-america' => [
        'name' => 'Bank of America',
        'type' => 'Foreign Bank',
        'minRate' => 9.00,
        'maxRate' => 16.00,
        'defaultRate' => 11.50,
        'features' => [
            'American banking giant',
            'Global presence',
            'Corporate banking focus',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,50,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    'jp-morgan-chase' => [
        'name' => 'JP Morgan Chase',
        'type' => 'Foreign Bank',
        'minRate' => 8.75,
        'maxRate' => 15.75,
        'defaultRate' => 11.25,
        'features' => [
            'World\'s largest bank',
            'Investment banking leader',
            'Premium services',
            'Global standards'
        ],
        'eligibility' => [
            'Age: 25-58 years',
            'Minimum income: ₹2,00,000 per month',
            'Employment: 3 years minimum',
            'Ultra high net worth'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    
    // More NBFCs
    'shriram-finance-limited' => [
        'name' => 'Shriram Finance Limited',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 21.50,
        'defaultRate' => 15.75,
        'features' => [
            'Shriram Group backing',
            'Vehicle finance expertise',
            'Rural and semi-urban focus',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹10,000 per month',
            'Employment: 1 year minimum',
            'Basic documentation'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'power-finance-corporation' => [
        'name' => 'Power Finance Corporation',
        'type' => 'NBFC',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 12.00,
        'features' => [
            'Government backing',
            'Power sector expertise',
            'Infrastructure finance',
            'Competitive rates'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 2 years minimum',
            'Good credit score'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'rec-limited' => [
        'name' => 'REC Limited',
        'type' => 'NBFC',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.25,
        'features' => [
            'Rural electrification focus',
            'Government enterprise',
            'Infrastructure finance',
            'Reliable institution'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Stable employment'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle proforma'
        ]
    ],
    
    // More Foreign Banks
    'anz-bank' => [
        'name' => 'ANZ Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 16.75,
        'defaultRate' => 12.25,
        'features' => [
            'Australian banking standards',
            'Asia-Pacific expertise',
            'Corporate banking focus',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'bank-of-china-limited' => [
        'name' => 'Bank of China Limited',
        'type' => 'Foreign Bank',
        'minRate' => 10.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.75,
        'features' => [
            'Chinese banking giant',
            'Belt and Road initiative',
            'Trade finance expertise',
            'Asian market focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹50,000 per month',
            'Employment: 3 years minimum',
            'Trade finance clients'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity documents',
            'Vehicle quotation'
        ]
    ],
    
    // Major Fintech Companies
    'lendingkart' => [
        'name' => 'LendingKart',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'SME lending focus',
            'Digital platform',
            'Quick approvals',
            'Technology-driven'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year',
            'Monthly turnover: ₹5 lakhs',
            'GST registration required'
        ],
        'documents' => [
            'Business documents',
            'Bank statements',
            'GST returns',
            'Vehicle documents'
        ]
    ],
    'capital-float' => [
        'name' => 'Capital Float',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.50,
        'features' => [
            'Business lending specialist',
            'Digital first approach',
            'Flexible terms',
            'Quick disbursals'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Business vintage: 2 years',
            'Monthly revenue: ₹10 lakhs',
            'Good business credit'
        ],
        'documents' => [
            'Business registration',
            'Financial statements',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'navi-loans' => [
        'name' => 'Navi Loans',
        'type' => 'Fintech Company',
        'minRate' => 11.50,
        'maxRate' => 22.00,
        'defaultRate' => 16.00,
        'features' => [
            'Sachin Bansal founded',
            'Digital lending',
            'AI-driven decisions',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 650+'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    
    // More NBFCs
    'canfin-homes' => [
        'name' => 'CanFin Homes',
        'type' => 'NBFC',
        'minRate' => 8.75,
        'maxRate' => 16.75,
        'defaultRate' => 11.50,
        'features' => [
            'Canara Bank subsidiary',
            'Housing finance specialist',
            'Competitive rates',
            'Strong backing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Good credit score'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'hudco' => [
        'name' => 'HUDCO',
        'type' => 'NBFC',
        'minRate' => 8.50,
        'maxRate' => 15.50,
        'defaultRate' => 11.00,
        'features' => [
            'Government backing',
            'Urban development focus',
            'Infrastructure finance',
            'Reliable institution'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 2 years minimum',
            'Stable job profile'
        ],
        'documents' => [
            'Salary certificates',
            'Bank statements',
            'Identity proof',
            'Vehicle documents'
        ]
    ],
    
    // More Foreign Banks
    'mizuho-bank' => [
        'name' => 'Mizuho Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.00,
        'features' => [
            'Japanese banking excellence',
            'Corporate banking focus',
            'Trade finance expertise',
            'Asian market specialist'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'sumitomo-mitsui-banking' => [
        'name' => 'Sumitomo Mitsui Banking',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.75,
        'features' => [
            'Japanese megabank',
            'Corporate banking leader',
            'International expertise',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,25,000 per month',
            'Employment: 3 years minimum',
            'Large corporate focus'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity documents',
            'Vehicle documents'
        ]
    ],
    'ubs-ag' => [
        'name' => 'UBS AG',
        'type' => 'Foreign Bank',
        'minRate' => 8.50,
        'maxRate' => 15.50,
        'defaultRate' => 10.75,
        'features' => [
            'Swiss banking excellence',
            'Wealth management leader',
            'Private banking focus',
            'Ultra high net worth'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹5,00,000 per month',
            'Employment: 5 years minimum',
            'Ultra HNI clients only'
        ],
        'documents' => [
            'Comprehensive income proof',
            'Bank statements',
            'Wealth certificates',
            'Vehicle documents'
        ]
    ],
    
    // More Fintech Companies
    'cred-loans' => [
        'name' => 'CRED Loans',
        'type' => 'Fintech Company',
        'minRate' => 10.50,
        'maxRate' => 20.00,
        'defaultRate' => 14.50,
        'features' => [
            'Premium credit card users',
            'Exclusive membership',
            'Digital platform',
            'Quick approvals'
        ],
        'eligibility' => [
            'Age: 25-55 years',
            'Credit card holders only',
            'High credit score: 750+',
            'Premium customer segment'
        ],
        'documents' => [
            'Credit card statements',
            'Income proof',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'dhani-loans' => [
        'name' => 'Dhani Loans',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 24.50,
        'defaultRate' => 17.75,
        'features' => [
            'Indiabulls Group company',
            'Digital lending platform',
            'Quick processing',
            'Mobile app based'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'slice-fintech' => [
        'name' => 'Slice Fintech',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 25.50,
        'defaultRate' => 18.50,
        'features' => [
            'Youth-focused platform',
            'Credit card alternative',
            'Digital-first approach',
            'Instant approvals'
        ],
        'eligibility' => [
            'Age: 18-35 years',
            'Student or working',
            'Minimum income: ₹10,000',
            'Digital native customers'
        ],
        'documents' => [
            'Identity proof',
            'Income documents',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    
    // More Foreign Banks
    'credit-suisse' => [
        'name' => 'Credit Suisse',
        'type' => 'Foreign Bank',
        'minRate' => 8.75,
        'maxRate' => 15.75,
        'defaultRate' => 11.00,
        'features' => [
            'Swiss banking tradition',
            'Investment banking focus',
            'Private wealth management',
            'Ultra premium services'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹10,00,000 per month',
            'Ultra high net worth',
            'Investment banking clients'
        ],
        'documents' => [
            'Comprehensive financial records',
            'Bank statements',
            'Wealth certificates',
            'Vehicle documentation'
        ]
    ],
    'royal-bank-scotland' => [
        'name' => 'Royal Bank of Scotland',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.25,
        'features' => [
            'Scottish banking heritage',
            'Corporate banking focus',
            'International presence',
            'Premium services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,50,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    'mashreq-bank' => [
        'name' => 'Mashreq Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.00,
        'maxRate' => 17.00,
        'defaultRate' => 12.50,
        'features' => [
            'UAE banking excellence',
            'Middle East expertise',
            'Trade finance specialist',
            'Regional focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Middle East trade clients'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Trade documents',
            'Vehicle quotation'
        ]
    ],
    
    // More Fintech Companies
    'rupeek-loans' => [
        'name' => 'Rupeek Loans',
        'type' => 'Fintech Company',
        'minRate' => 11.00,
        'maxRate' => 21.00,
        'defaultRate' => 15.50,
        'features' => [
            'Gold loan specialist',
            'Digital platform',
            'Doorstep service',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Gold as collateral',
            'Minimum loan: ₹5,000',
            'Asset-backed lending'
        ],
        'documents' => [
            'Identity proof',
            'Gold jewelry',
            'Address proof',
            'Vehicle documents'
        ]
    ],
    'loantap' => [
        'name' => 'LoanTap',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 23.00,
        'defaultRate' => 16.50,
        'features' => [
            'Young professionals focus',
            'Digital lending',
            'Flexible terms',
            'Quick approvals'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 1 year minimum',
            'Good credit score'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'Identity documents',
            'Vehicle proforma'
        ]
    ],
    'incred' => [
        'name' => 'InCred',
        'type' => 'Fintech Company',
        'minRate' => 11.50,
        'maxRate' => 22.50,
        'defaultRate' => 16.00,
        'features' => [
            'Education and personal loans',
            'Digital platform',
            'Young professionals',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 1 year minimum',
            'Credit score: 700+'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'KYC documents',
            'Vehicle documents'
        ]
    ],
    'money-view' => [
        'name' => 'Money View',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 24.00,
        'defaultRate' => 17.50,
        'features' => [
            'Personal finance app',
            'Digital lending',
            'Instant approvals',
            'Mobile-first platform'
        ],
        'eligibility' => [
            'Age: 21-58 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 6 months minimum',
            'App-based customers'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Identity proof',
            'Vehicle quotation'
        ]
    ],
    'paysense' => [
        'name' => 'PaySense',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.00,
        'features' => [
            'AI-driven lending',
            'Digital platform',
            'Quick processing',
            'Mobile app based'
        ],
        'eligibility' => [
            'Age: 23-58 years',
            'Minimum income: ₹12,000 per month',
            'Employment: 1 year minimum',
            'Digital customers'
        ],
        'documents' => [
            'Salary slips',
            'Bank statements',
            'KYC documents',
            'Vehicle proforma'
        ]
    ],
    
    // Remaining NBFCs
    'sammaan-capital-limited' => [
        'name' => 'Sammaan Capital Limited',
        'type' => 'NBFC',
        'minRate' => 12.50,
        'maxRate' => 22.00,
        'defaultRate' => 16.75,
        'features' => [
            'Digital lending platform',
            'SME focus',
            'Quick processing',
            'Technology-driven'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 2 years',
            'Monthly turnover: ₹2 lakhs',
            'GST registered business'
        ],
        'documents' => [
            'Business documents',
            'Bank statements',
            'GST returns',
            'Vehicle quotation'
        ]
    ],
    'indian-railway-finance-corp' => [
        'name' => 'Indian Railway Finance Corporation',
        'type' => 'NBFC',
        'minRate' => 8.25,
        'maxRate' => 15.25,
        'defaultRate' => 10.75,
        'features' => [
            'Government enterprise',
            'Railway infrastructure focus',
            'Competitive rates',
            'Reliable institution'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Minimum income: ₹35,000 per month',
            'Employment: 3 years minimum',
            'Government/PSU preference'
        ],
        'documents' => [
            'Income certificates',
            'Bank statements',
            'Service records',
            'Vehicle documents'
        ]
    ],
    'dewan-housing-finance' => [
        'name' => 'Dewan Housing Finance',
        'type' => 'NBFC',
        'minRate' => 11.00,
        'maxRate' => 19.00,
        'defaultRate' => 14.25,
        'features' => [
            'Housing finance specialist',
            'Diverse lending portfolio',
            'Competitive rates',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 2 years minimum',
            'Property owners preferred'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Property documents',
            'Vehicle proforma'
        ]
    ],
    
    // More Foreign Banks
    'commonwealth-bank-australia' => [
        'name' => 'Commonwealth Bank of Australia',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.00,
        'features' => [
            'Australian banking leader',
            'Asia-Pacific expertise',
            'Corporate banking focus',
            'Mining sector specialist'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Corporate records',
            'Vehicle documents'
        ]
    ],
    'credit-agricole' => [
        'name' => 'Credit Agricole',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 16.75,
        'defaultRate' => 12.25,
        'features' => [
            'French cooperative bank',
            'Agricultural finance expertise',
            'European standards',
            'Corporate banking'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Agricultural sector clients'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Sector-specific documents',
            'Vehicle quotation'
        ]
    ],
    'westpac-banking' => [
        'name' => 'Westpac Banking Corporation',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.75,
        'features' => [
            'Australian Big Four bank',
            'Asia-Pacific presence',
            'Corporate banking specialist',
            'Mining and resources focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,25,000 per month',
            'Employment: 3 years minimum',
            'Large corporate clients'
        ],
        'documents' => [
            'Comprehensive income proof',
            'Bank statements',
            'Corporate documentation',
            'Vehicle proforma'
        ]
    ],
    
    // More Fintech Companies
    'mobikwik-lending' => [
        'name' => 'MobiKwik Lending',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 24.00,
        'defaultRate' => 17.00,
        'features' => [
            'Digital wallet ecosystem',
            'Instant lending',
            'Mobile-first platform',
            'Quick approvals'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'MobiKwik wallet users',
            'Minimum income: ₹15,000',
            'Digital transaction history'
        ],
        'documents' => [
            'Digital identity',
            'Transaction history',
            'Income proof',
            'Vehicle documents'
        ]
    ],
    'ziploan' => [
        'name' => 'ZipLoan',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 19.00,
        'features' => [
            'MSME lending specialist',
            'Digital platform',
            'Quick processing',
            'Collateral-free loans'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 2 years',
            'Monthly revenue: ₹3 lakhs',
            'MSME registration'
        ],
        'documents' => [
            'Business registration',
            'Bank statements',
            'GST returns',
            'Vehicle quotation'
        ]
    ],
    'flexiloans' => [
        'name' => 'FlexiLoans',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 25.50,
        'defaultRate' => 18.50,
        'features' => [
            'MSME lending focus',
            'Digital platform',
            'Flexible terms',
            'Quick disbursals'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year',
            'Monthly turnover: ₹5 lakhs',
            'Business loan specialist'
        ],
        'documents' => [
            'Business documents',
            'Financial statements',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'amazon-pay-later' => [
        'name' => 'Amazon Pay Later',
        'type' => 'Fintech Company',
        'minRate' => 14.50,
        'maxRate' => 27.00,
        'defaultRate' => 19.50,
        'features' => [
            'Amazon ecosystem',
            'Digital payments focus',
            'E-commerce integration',
            'Instant credit'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Amazon customer',
            'Good transaction history',
            'Digital payment users'
        ],
        'documents' => [
            'Amazon account history',
            'Transaction records',
            'Income proof',
            'Vehicle documents'
        ]
    ],
    
    // More Foreign Banks
    'shinhan-bank' => [
        'name' => 'Shinhan Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.00,
        'maxRate' => 17.00,
        'defaultRate' => 12.50,
        'features' => [
            'Korean banking excellence',
            'Asian market expertise',
            'Technology focus',
            'Corporate banking'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Korean business ties preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'KYC documents',
            'Vehicle quotation'
        ]
    ],
    'keb-hana-bank' => [
        'name' => 'KEB Hana Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.75,
        'features' => [
            'Korean banking leader',
            'Trade finance expertise',
            'Asian market focus',
            'Corporate services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹80,000 per month',
            'Employment: 3 years minimum',
            'Trade finance clients'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Trade documents',
            'Vehicle proforma'
        ]
    ],
    'rabobank-international' => [
        'name' => 'Rabobank International',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.00,
        'features' => [
            'Dutch cooperative bank',
            'Agricultural finance leader',
            'Food & Agri expertise',
            'Sustainability focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Agricultural sector clients',
            'Sustainability projects'
        ],
        'documents' => [
            'Income documents',
            'Sector certificates',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    
    // More Fintech Companies  
    'flipkart-pay-later' => [
        'name' => 'Flipkart Pay Later',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 26.50,
        'defaultRate' => 19.00,
        'features' => [
            'Flipkart ecosystem',
            'E-commerce integration',
            'Digital credit',
            'Instant approvals'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Flipkart customer',
            'Good purchase history',
            'Digital payment users'
        ],
        'documents' => [
            'Flipkart account history',
            'Purchase records',
            'Income proof',
            'Vehicle quotation'
        ]
    ],
    'razorpay-capital' => [
        'name' => 'Razorpay Capital',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 24.50,
        'defaultRate' => 17.50,
        'features' => [
            'Fintech ecosystem',
            'Business lending focus',
            'Digital platform',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business customers',
            'Razorpay merchants',
            'Digital transaction history'
        ],
        'documents' => [
            'Business registration',
            'Razorpay transaction history',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'payu-credit' => [
        'name' => 'PayU Credit',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 25.50,
        'defaultRate' => 18.50,
        'features' => [
            'PayU ecosystem',
            'Digital payments focus',
            'Instant credit decisions',
            'Mobile platform'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'PayU platform users',
            'Digital transaction history',
            'Good payment behavior'
        ],
        'documents' => [
            'PayU account records',
            'Transaction history',
            'Income documents',
            'Vehicle documents'
        ]
    ],
    'zomato-pay-later' => [
        'name' => 'Zomato Pay Later',
        'type' => 'Fintech Company',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.50,
        'features' => [
            'Food delivery ecosystem',
            'Digital credit',
            'Instant approvals',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'Zomato users',
            'Regular order history',
            'Digital payment users'
        ],
        'documents' => [
            'Zomato order history',
            'App usage records',
            'Income proof',
            'Vehicle quotation'
        ]
    ],
    'neogrowth' => [
        'name' => 'NeoGrowth',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.00,
        'features' => [
            'SME lending specialist',
            'Merchant financing',
            'Digital platform',
            'Quick disbursals'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year',
            'Monthly sales: ₹2 lakhs',
            'Merchant partners'
        ],
        'documents' => [
            'Business registration',
            'Sales records',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    
    // Additional Foreign Banks
    'bank-of-ceylon' => [
        'name' => 'Bank of Ceylon',
        'type' => 'Foreign Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 13.00,
        'features' => [
            'Sri Lankan national bank',
            'South Asian expertise',
            'Trade finance focus',
            'Regional presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹50,000 per month',
            'Employment: 3 years minimum',
            'South Asian trade clients'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Trade records',
            'Vehicle quotation'
        ]
    ],
    'industrial-commercial-bank-china' => [
        'name' => 'Industrial and Commercial Bank of China',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 16.75,
        'defaultRate' => 12.25,
        'features' => [
            'World\'s largest bank by assets',
            'China trade expertise',
            'Belt and Road financing',
            'Infrastructure focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'China trade relations',
            'Infrastructure projects'
        ],
        'documents' => [
            'Income proof',
            'Trade documents',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    
    // More Fintech Companies
    'ugro-capital' => [
        'name' => 'Ugro Capital',
        'type' => 'Fintech Company',
        'minRate' => 12.75,
        'maxRate' => 24.75,
        'defaultRate' => 17.75,
        'features' => [
            'MSME lending specialist',
            'Asset-backed lending',
            'Technology platform',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 2 years',
            'Asset backing required',
            'MSME registration'
        ],
        'documents' => [
            'Business documents',
            'Asset certificates',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'fibe-money' => [
        'name' => 'Fibe Money',
        'type' => 'Fintech Company',
        'minRate' => 13.25,
        'maxRate' => 25.25,
        'defaultRate' => 18.25,
        'features' => [
            'Personal loan specialist',
            'Instant approvals',
            'Mobile app platform',
            'Digital lending'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Digital customers'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Digital identity',
            'Vehicle quotation'
        ]
    ],
    'jupiter-money' => [
        'name' => 'Jupiter Money',
        'type' => 'Fintech Company',
        'minRate' => 11.75,
        'maxRate' => 23.75,
        'defaultRate' => 16.75,
        'features' => [
            'Neo-banking platform',
            'Digital-first approach',
            'Personal finance management',
            'Smart lending'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'Digital banking users',
            'Minimum income: ₹25,000',
            'Good digital footprint'
        ],
        'documents' => [
            'Digital banking history',
            'Income documents',
            'KYC verification',
            'Vehicle proforma'
        ]
    ],
    'fi-money' => [
        'name' => 'Fi Money',
        'type' => 'Fintech Company',
        'minRate' => 12.25,
        'maxRate' => 24.25,
        'defaultRate' => 17.25,
        'features' => [
            'Digital banking platform',
            'Smart financial tools',
            'Instant credit',
            'Mobile-first experience'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'Tech-savvy customers',
            'Minimum income: ₹25,000',
            'Digital banking users'
        ],
        'documents' => [
            'Digital identity',
            'Income documents',
            'Banking history',
            'Vehicle documents'
        ]
    ],
    'okcredit' => [
        'name' => 'OkCredit',
        'type' => 'Fintech Company',
        'minRate' => 14.50,
        'maxRate' => 27.50,
        'defaultRate' => 20.00,
        'features' => [
            'Business credit platform',
            'Digital ledger focus',
            'SME lending',
            'Working capital loans'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business customers',
            'OkCredit app users',
            'Digital transaction history'
        ],
        'documents' => [
            'Business registration',
            'OkCredit transaction history',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'groww-credit' => [
        'name' => 'Groww Credit',
        'type' => 'Fintech Company',
        'minRate' => 12.00,
        'maxRate' => 23.00,
        'defaultRate' => 16.50,
        'features' => [
            'Investment platform integration',
            'Investor-focused lending',
            'Digital platform',
            'Portfolio-based lending'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Groww platform users',
            'Investment portfolio',
            'Good investment history'
        ],
        'documents' => [
            'Investment portfolio',
            'Groww account history',
            'Income documents',
            'Vehicle proforma'
        ]
    ],
    
    // Final batch - More Foreign Banks and Fintech
    'bnp-paribas' => [
        'name' => 'BNP Paribas',
        'type' => 'Foreign Bank',
        'minRate' => 9.00,
        'maxRate' => 16.00,
        'defaultRate' => 11.50,
        'features' => [
            'European banking leader',
            'Corporate banking focus',
            'Trade finance expertise',
            'Global presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients preferred'
        ],
        'documents' => [
            'Income documents',
            'Bank statements',
            'Corporate records',
            'Vehicle quotation'
        ]
    ],
    'united-overseas-bank' => [
        'name' => 'United Overseas Bank',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.75,
        'features' => [
            'Singapore banking excellence',
            'Southeast Asia expertise',
            'Private banking focus',
            'Regional network'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Southeast Asia trade'
        ],
        'documents' => [
            'Income proof',
            'Bank statements',
            'Trade documents',
            'Vehicle proforma'
        ]
    ],
    'tala-india' => [
        'name' => 'Tala India',
        'type' => 'Fintech Company',
        'minRate' => 15.50,
        'maxRate' => 29.50,
        'defaultRate' => 21.50,
        'features' => [
            'Mobile-first lending',
            'AI-driven decisions',
            'Instant approvals',
            'Digital identity verification'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Smartphone users',
            'Digital footprint required',
            'Basic income proof'
        ],
        'documents' => [
            'Mobile app verification',
            'Digital identity',
            'Income proof',
            'Vehicle documents'
        ]
    ],
    'simpl-fintech' => [
        'name' => 'Simpl Fintech',
        'type' => 'Fintech Company',
        'minRate' => 13.75,
        'maxRate' => 26.75,
        'defaultRate' => 19.25,
        'features' => [
            'Pay later platform',
            'Merchant network',
            'Digital credit',
            'One-tap checkout'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'Simpl network merchants',
            'Good transaction history',
            'Digital payment users'
        ],
        'documents' => [
            'Simpl transaction history',
            'Merchant records',
            'Income documents',
            'Vehicle quotation'
        ]
    ],
    'uni-fintech' => [
        'name' => 'Uni Fintech',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 24.50,
        'defaultRate' => 17.50,
        'features' => [
            'Credit card alternative',
            'Digital payments',
            'Split payment options',
            'Mobile app platform'
        ],
        'eligibility' => [
            'Age: 21-45 years',
            'Tech-savvy customers',
            'Digital payment history',
            'Good credit behavior'
        ],
        'documents' => [
            'Digital identity',
            'Payment history',
            'Income proof',
            'Vehicle proforma'
        ]
    ],
    
    // Final NBFCs
    'tata-sons-private' => [
        'name' => 'Tata Sons Private Limited',
        'type' => 'NBFC',
        'minRate' => 8.50,
        'maxRate' => 16.50,
        'defaultRate' => 11.25,
        'features' => [
            'Tata Group flagship',
            'Conglomerate backing',
            'Premium services',
            'Strong brand trust'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'High net worth clients'
        ],
        'documents' => [
            'Income certificates',
            'Bank statements',
            'Investment records',
            'Vehicle documents'
        ]
    ],
    '360-one-prime' => [
        'name' => '360 One Prime',
        'type' => 'NBFC',
        'minRate' => 9.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.00,
        'features' => [
            'Wealth management focus',
            'Premium banking services',
            'Investment expertise',
            'High net worth clients'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹5,00,000 per month',
            'High net worth individuals',
            'Investment portfolio required'
        ],
        'documents' => [
            'Wealth certificates',
            'Investment portfolio',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'indiabulls-commercial-credit' => [
        'name' => 'Indiabulls Commercial Credit',
        'type' => 'NBFC',
        'minRate' => 11.50,
        'maxRate' => 20.50,
        'defaultRate' => 15.00,
        'features' => [
            'Commercial lending focus',
            'Business finance specialist',
            'Quick processing',
            'Flexible terms'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 2 years',
            'Monthly turnover: ₹10 lakhs',
            'Commercial property owners'
        ],
        'documents' => [
            'Business registration',
            'Financial statements',
            'Property documents',
            'Vehicle proforma'
        ]
    ],
    'reliance-home-finance' => [
        'name' => 'Reliance Home Finance',
        'type' => 'NBFC',
        'minRate' => 10.50,
        'maxRate' => 19.50,
        'defaultRate' => 14.00,
        'features' => [
            'Home finance specialist',
            'Reliance Group backing',
            'Competitive rates',
            'Pan-India presence'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Property owners preferred'
        ],
        'documents' => [
            'Income documents',
            'Property papers',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    
    // More Foreign Banks
    'barclays-bank' => [
        'name' => 'Barclays Bank',
        'type' => 'Foreign Bank',
        'minRate' => 8.75,
        'maxRate' => 15.75,
        'defaultRate' => 11.00,
        'features' => [
            'British banking heritage',
            'Investment banking leader',
            'Premium services',
            'Global presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹2,00,000 per month',
            'Employment: 5 years minimum',
            'Ultra high net worth'
        ],
        'documents' => [
            'Comprehensive income proof',
            'Investment records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'american-express-banking' => [
        'name' => 'American Express Banking',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.00,
        'features' => [
            'Premium card services',
            'Wealth management',
            'Exclusive banking',
            'High-end clientele'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹3,00,000 per month',
            'Amex card holders',
            'Premium customer segment'
        ],
        'documents' => [
            'Amex card statements',
            'Income certificates',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'societe-generale' => [
        'name' => 'Societe Generale',
        'type' => 'Foreign Bank',
        'minRate' => 9.25,
        'maxRate' => 16.25,
        'defaultRate' => 11.75,
        'features' => [
            'French banking excellence',
            'Corporate banking focus',
            'European standards',
            'International expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients'
        ],
        'documents' => [
            'Income documents',
            'Corporate records',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    
    // More Fintech Companies
    'faircent-loans' => [
        'name' => 'Faircent Loans',
        'type' => 'Fintech Company',
        'minRate' => 12.25,
        'maxRate' => 24.25,
        'defaultRate' => 17.25,
        'features' => [
            'P2P lending platform',
            'Investor-borrower matching',
            'Competitive rates',
            'Digital platform'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹25,000 per month',
            'Employment: 2 years minimum',
            'Good credit score'
        ],
        'documents' => [
            'Income proof',
            'Credit reports',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'zestmoney' => [
        'name' => 'ZestMoney',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 26.50,
        'defaultRate' => 19.00,
        'features' => [
            'Buy now pay later',
            'EMI financing',
            'Digital lending',
            'E-commerce focus'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'E-commerce shoppers',
            'Digital payment history',
            'Basic income proof'
        ],
        'documents' => [
            'Digital transaction history',
            'Income documents',
            'KYC verification',
            'Vehicle proforma'
        ]
    ],
    
    // More Foreign Banks
    'bank-of-nova-scotia' => [
        'name' => 'Bank of Nova Scotia',
        'type' => 'Foreign Bank',
        'minRate' => 9.75,
        'maxRate' => 16.75,
        'defaultRate' => 12.25,
        'features' => [
            'Canadian banking excellence',
            'International banking',
            'Latin America expertise',
            'Corporate focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,00,000 per month',
            'Employment: 3 years minimum',
            'International business'
        ],
        'documents' => [
            'Income documents',
            'International records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'bank-of-tokyo-mitsubishi' => [
        'name' => 'Bank of Tokyo Mitsubishi',
        'type' => 'Foreign Bank',
        'minRate' => 9.50,
        'maxRate' => 16.50,
        'defaultRate' => 12.00,
        'features' => [
            'Japanese megabank',
            'Corporate banking leader',
            'Trade finance expertise',
            'Asian market specialist'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹1,25,000 per month',
            'Employment: 3 years minimum',
            'Japan trade relations'
        ],
        'documents' => [
            'Income proof',
            'Trade documents',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'bny-mellon' => [
        'name' => 'BNY Mellon',
        'type' => 'Foreign Bank',
        'minRate' => 8.50,
        'maxRate' => 15.50,
        'defaultRate' => 10.50,
        'features' => [
            'Investment services leader',
            'Custody and clearing',
            'Asset management',
            'Ultra high net worth'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹10,00,000 per month',
            'Investment clients only',
            'Ultra premium segment'
        ],
        'documents' => [
            'Investment portfolio',
            'Wealth certificates',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'sber-bank' => [
        'name' => 'Sber Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.75,
        'maxRate' => 17.75,
        'defaultRate' => 13.25,
        'features' => [
            'Russian banking leader',
            'Eastern European expertise',
            'Corporate banking',
            'Commodity finance'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Commodity trade clients'
        ],
        'documents' => [
            'Income documents',
            'Trade certificates',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    
    // More Fintech Companies
    'true-balance' => [
        'name' => 'True Balance',
        'type' => 'Fintech Company',
        'minRate' => 14.25,
        'maxRate' => 27.25,
        'defaultRate' => 19.75,
        'features' => [
            'Mobile recharge platform',
            'Digital wallet services',
            'Micro-lending focus',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 18-55 years',
            'True Balance app users',
            'Regular recharge history',
            'Basic income proof'
        ],
        'documents' => [
            'App usage history',
            'Mobile recharge records',
            'Income documents',
            'Vehicle proforma'
        ]
    ],
    'branch-fintech' => [
        'name' => 'Branch Fintech',
        'type' => 'Fintech Company',
        'minRate' => 15.50,
        'maxRate' => 29.00,
        'defaultRate' => 21.00,
        'features' => [
            'Mobile lending platform',
            'Instant micro-loans',
            'AI-driven decisions',
            'Digital identity verification'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Smartphone users',
            'Basic digital footprint',
            'Minimum income proof'
        ],
        'documents' => [
            'Digital identity',
            'Mobile app verification',
            'Basic income proof',
            'Vehicle documents'
        ]
    ],
    'cashbean' => [
        'name' => 'CashBean',
        'type' => 'Fintech Company',
        'minRate' => 14.75,
        'maxRate' => 28.50,
        'defaultRate' => 20.25,
        'features' => [
            'Instant personal loans',
            'Mobile app platform',
            'Quick approvals',
            'Digital lending'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹15,000 per month',
            'Employment: 6 months minimum',
            'App-based customers'
        ],
        'documents' => [
            'Income proof',
            'Employment records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'credflow' => [
        'name' => 'CredFlow',
        'type' => 'Fintech Company',
        'minRate' => 13.25,
        'maxRate' => 25.75,
        'defaultRate' => 18.50,
        'features' => [
            'Invoice financing',
            'Working capital loans',
            'Digital platform',
            'SME focus'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year',
            'Invoice-based business',
            'GST registered'
        ],
        'documents' => [
            'Business registration',
            'Invoice records',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'rupifi' => [
        'name' => 'RupiFi',
        'type' => 'Fintech Company',
        'minRate' => 12.75,
        'maxRate' => 24.75,
        'defaultRate' => 17.75,
        'features' => [
            'Revenue-based financing',
            'Business lending',
            'Digital platform',
            'Flexible repayment'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 6 months',
            'Digital revenue streams',
            'Monthly revenue: ₹1 lakh'
        ],
        'documents' => [
            'Revenue records',
            'Business documents',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    
    // Final batch of remaining banks
    'ab-bank-limited' => [
        'name' => 'AB Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.00,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Bangladeshi commercial bank',
            'South Asian expertise',
            'Trade finance focus',
            'Regional presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹40,000 per month',
            'Employment: 3 years minimum',
            'South Asian trade'
        ],
        'documents' => [
            'Income documents',
            'Trade records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'ing-vysya-bank' => [
        'name' => 'ING Vysya Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.75,
        'features' => [
            'Dutch banking heritage',
            'Technology focus',
            'Digital banking',
            'Corporate services'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Corporate clients'
        ],
        'documents' => [
            'Income proof',
            'Corporate records',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'oxyzo' => [
        'name' => 'Oxyzo',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 25.00,
        'defaultRate' => 18.00,
        'features' => [
            'OfBusiness subsidiary',
            'B2B lending specialist',
            'Supply chain finance',
            'Digital platform'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'B2B businesses',
            'Supply chain participants',
            'Business vintage: 2 years'
        ],
        'documents' => [
            'Business registration',
            'Supply chain documents',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'capfloat' => [
        'name' => 'CapFloat',
        'type' => 'Fintech Company',
        'minRate' => 12.50,
        'maxRate' => 24.00,
        'defaultRate' => 17.25,
        'features' => [
            'Business lending platform',
            'Working capital loans',
            'Digital underwriting',
            'Quick processing'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Business vintage: 1 year',
            'Monthly revenue: ₹5 lakhs',
            'Digital business records'
        ],
        'documents' => [
            'Business documents',
            'Revenue records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'finzy' => [
        'name' => 'Finzy',
        'type' => 'Fintech Company',
        'minRate' => 14.00,
        'maxRate' => 26.00,
        'defaultRate' => 19.00,
        'features' => [
            'Personal loan platform',
            'Instant approvals',
            'Digital lending',
            'Mobile app based'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Good credit score'
        ],
        'documents' => [
            'Income proof',
            'Employment records',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'money-club' => [
        'name' => 'Money Club',
        'type' => 'Fintech Company',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.50,
        'features' => [
            'Digital chit fund platform',
            'Community lending',
            'Peer-to-peer finance',
            'Group savings focus'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Group participation',
            'Regular savings habit',
            'Community references'
        ],
        'documents' => [
            'Group membership',
            'Savings records',
            'Income documents',
            'Vehicle documents'
        ]
    ],
    'ring' => [
        'name' => 'Ring',
        'type' => 'Fintech Company',
        'minRate' => 16.00,
        'maxRate' => 30.00,
        'defaultRate' => 22.00,
        'features' => [
            'Digital lending platform',
            'Instant micro-loans',
            'App-based service',
            'Quick disbursals'
        ],
        'eligibility' => [
            'Age: 18-55 years',
            'Smartphone users',
            'Basic income proof',
            'Digital verification'
        ],
        'documents' => [
            'Digital identity',
            'Income proof',
            'Mobile verification',
            'Vehicle quotation'
        ]
    ],
    
    // Final 10 Foreign Banks
    'bank-of-bahrain-kuwait' => [
        'name' => 'Bank of Bahrain and Kuwait',
        'type' => 'Foreign Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 13.00,
        'features' => [
            'Middle Eastern banking',
            'Islamic banking services',
            'Gulf region expertise',
            'Trade finance focus'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹75,000 per month',
            'Employment: 3 years minimum',
            'Middle East trade clients'
        ],
        'documents' => [
            'Income documents',
            'Trade certificates',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'ctbc-bank' => [
        'name' => 'CTBC Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.25,
        'maxRate' => 17.25,
        'defaultRate' => 12.75,
        'features' => [
            'Taiwanese banking excellence',
            'Asian market expertise',
            'Corporate banking',
            'Trade finance specialist'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹60,000 per month',
            'Employment: 3 years minimum',
            'Asian trade clients'
        ],
        'documents' => [
            'Income proof',
            'Trade documents',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'erste-bank' => [
        'name' => 'Erste Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.00,
        'maxRate' => 17.00,
        'defaultRate' => 12.50,
        'features' => [
            'Austrian banking heritage',
            'Central European expertise',
            'Corporate banking focus',
            'Regional presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹80,000 per month',
            'Employment: 3 years minimum',
            'European business ties'
        ],
        'documents' => [
            'Income documents',
            'Business records',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'industrial-bank-korea' => [
        'name' => 'Industrial Bank of Korea',
        'type' => 'Foreign Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 13.00,
        'features' => [
            'Korean industrial banking',
            'SME banking specialist',
            'Manufacturing sector focus',
            'Asian market expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Manufacturing sector',
            'Minimum income: ₹70,000 per month',
            'Korean business connections'
        ],
        'documents' => [
            'Industrial certificates',
            'Income proof',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'jpmorgan-chase-bank' => [
        'name' => 'JPMorgan Chase Bank',
        'type' => 'Foreign Bank',
        'minRate' => 8.25,
        'maxRate' => 15.25,
        'defaultRate' => 10.75,
        'features' => [
            'World\'s largest bank',
            'Investment banking leader',
            'Ultra premium services',
            'Global financial expertise'
        ],
        'eligibility' => [
            'Age: 25-65 years',
            'Minimum income: ₹5,00,000 per month',
            'Ultra high net worth',
            'Investment banking clients'
        ],
        'documents' => [
            'Comprehensive financial records',
            'Investment portfolio',
            'Wealth certificates',
            'Vehicle proforma'
        ]
    ],
    
    // Final 8 Fintech Companies
    'lazypay-loans' => [
        'name' => 'LazyPay Loans',
        'type' => 'Fintech Company',
        'minRate' => 14.50,
        'maxRate' => 27.50,
        'defaultRate' => 20.00,
        'features' => [
            'PayU ecosystem loans',
            'Digital credit platform',
            'Instant loan approvals',
            'App-based lending'
        ],
        'eligibility' => [
            'Age: 21-50 years',
            'LazyPay users',
            'Good payment history',
            'Digital transaction records'
        ],
        'documents' => [
            'LazyPay transaction history',
            'Payment records',
            'Income documents',
            'Vehicle documents'
        ]
    ],
    'upwards-fintech' => [
        'name' => 'Upwards Fintech',
        'type' => 'Fintech Company',
        'minRate' => 13.50,
        'maxRate' => 26.00,
        'defaultRate' => 18.75,
        'features' => [
            'Personal finance platform',
            'Digital lending',
            'Quick approvals',
            'Mobile-first approach'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹20,000 per month',
            'Employment: 1 year minimum',
            'Good credit history'
        ],
        'documents' => [
            'Income proof',
            'Employment records',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'zest-money' => [
        'name' => 'Zest Money',
        'type' => 'Fintech Company',
        'minRate' => 13.75,
        'maxRate' => 26.75,
        'defaultRate' => 19.25,
        'features' => [
            'AI-powered lending',
            'Digital EMI platform',
            'E-commerce integration',
            'Instant credit decisions'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Digital shoppers',
            'Basic income proof',
            'Good online behavior'
        ],
        'documents' => [
            'Digital transaction history',
            'Income documents',
            'Online shopping records',
            'Vehicle proforma'
        ]
    ],
    
    // Final remaining Foreign Banks
    'krung-thai-bank' => [
        'name' => 'Krung Thai Bank',
        'type' => 'Foreign Bank',
        'minRate' => 11.00,
        'maxRate' => 18.00,
        'defaultRate' => 13.50,
        'features' => [
            'Thai national bank',
            'Southeast Asian expertise',
            'Trade finance focus',
            'Regional presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹50,000 per month',
            'Employment: 3 years minimum',
            'Thai trade connections'
        ],
        'documents' => [
            'Income documents',
            'Trade certificates',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'ncc-bank-limited' => [
        'name' => 'NCC Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.25,
        'maxRate' => 18.25,
        'defaultRate' => 13.75,
        'features' => [
            'Bangladeshi commercial bank',
            'South Asian banking',
            'Trade finance specialist',
            'Regional expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹35,000 per month',
            'Employment: 3 years minimum',
            'Bangladesh trade relations'
        ],
        'documents' => [
            'Income proof',
            'Trade documents',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    'oman-international-bank' => [
        'name' => 'Oman International Bank',
        'type' => 'Foreign Bank',
        'minRate' => 10.75,
        'maxRate' => 17.75,
        'defaultRate' => 13.25,
        'features' => [
            'Omani banking expertise',
            'Middle East focus',
            'Oil and gas sector',
            'Gulf region specialist'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹80,000 per month',
            'Employment: 3 years minimum',
            'Gulf region clients'
        ],
        'documents' => [
            'Income documents',
            'Sector certificates',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'pt-bank-maybank' => [
        'name' => 'PT Bank Maybank',
        'type' => 'Foreign Bank',
        'minRate' => 10.50,
        'maxRate' => 17.50,
        'defaultRate' => 13.00,
        'features' => [
            'Malaysian banking excellence',
            'Southeast Asian leader',
            'Islamic banking services',
            'Regional expertise'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹60,000 per month',
            'Employment: 3 years minimum',
            'Southeast Asian business'
        ],
        'documents' => [
            'Income proof',
            'Business records',
            'Bank statements',
            'Vehicle documents'
        ]
    ],
    'sonali-bank-limited' => [
        'name' => 'Sonali Bank Limited',
        'type' => 'Foreign Bank',
        'minRate' => 11.50,
        'maxRate' => 18.50,
        'defaultRate' => 14.00,
        'features' => [
            'Bangladeshi national bank',
            'Government backing',
            'Traditional banking',
            'South Asian presence'
        ],
        'eligibility' => [
            'Age: 25-60 years',
            'Minimum income: ₹30,000 per month',
            'Employment: 3 years minimum',
            'Bangladesh connections'
        ],
        'documents' => [
            'Income documents',
            'Employment certificates',
            'Bank statements',
            'Vehicle quotation'
        ]
    ],
    
    // Final remaining Fintech Companies
    'lenddo-efl' => [
        'name' => 'Lenddo EFL',
        'type' => 'Fintech Company',
        'minRate' => 15.00,
        'maxRate' => 28.00,
        'defaultRate' => 20.50,
        'features' => [
            'Alternative credit scoring',
            'Digital footprint analysis',
            'Emerging market focus',
            'AI-driven lending'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Strong digital presence',
            'Social media activity',
            'Alternative credit profile'
        ],
        'documents' => [
            'Digital footprint verification',
            'Social media records',
            'Income proof',
            'Vehicle documents'
        ]
    ],
    'prefr' => [
        'name' => 'Prefr',
        'type' => 'Fintech Company',
        'minRate' => 14.25,
        'maxRate' => 27.25,
        'defaultRate' => 19.75,
        'features' => [
            'Personal loan platform',
            'Quick approvals',
            'Digital lending',
            'Mobile app based'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹18,000 per month',
            'Employment: 1 year minimum',
            'Good credit score'
        ],
        'documents' => [
            'Income proof',
            'Employment records',
            'Bank statements',
            'Vehicle proforma'
        ]
    ],
    'fairmoney' => [
        'name' => 'FairMoney',
        'type' => 'Fintech Company',
        'minRate' => 14.50,
        'maxRate' => 28.50,
        'defaultRate' => 20.50,
        'features' => [
            'Mobile lending platform',
            'Instant micro-loans',
            'Digital banking services',
            'African fintech model'
        ],
        'eligibility' => [
            'Age: 18-60 years',
            'Smartphone users',
            'Basic income verification',
            'Digital transaction history'
        ],
        'documents' => [
            'Digital identity',
            'Mobile verification',
            'Income proof',
            'Vehicle documents'
        ]
    ],
    'payme' => [
        'name' => 'PayMe',
        'type' => 'Fintech Company',
        'minRate' => 15.25,
        'maxRate' => 29.25,
        'defaultRate' => 21.25,
        'features' => [
            'Digital payment platform',
            'Instant credit',
            'Mobile wallet integration',
            'Quick disbursals'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Digital payment users',
            'Mobile wallet history',
            'Regular transaction pattern'
        ],
        'documents' => [
            'Payment wallet history',
            'Transaction records',
            'Income proof',
            'Vehicle quotation'
        ]
    ],
    'upwards' => [
        'name' => 'Upwards',
        'type' => 'Fintech Company',
        'minRate' => 13.00,
        'maxRate' => 25.50,
        'defaultRate' => 18.25,
        'features' => [
            'Personal finance platform',
            'Credit building focus',
            'Digital lending',
            'Financial wellness tools'
        ],
        'eligibility' => [
            'Age: 21-55 years',
            'Minimum income: ₹22,000 per month',
            'Employment: 1 year minimum',
            'Credit improvement seekers'
        ],
        'documents' => [
            'Income documents',
            'Credit reports',
            'Bank statements',
            'Vehicle proforma'
        ]
    ]
];

// Get bank slug from URL
$bankSlug = '';
if (isset($_GET['bank'])) {
    $bankSlug = $_GET['bank'];
}

// Check if bank exists
if (!isset($bankData[$bankSlug])) {
    header('Location: /calculators/all-banks-two-wheeler-loan-calculators');
    exit;
}

$bank = $bankData[$bankSlug];
$defaultRate = $bank['defaultRate'];
$defaultPrincipal = 150000;
$defaultTenure = 36;

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
?>
<?php include '../header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $bank['name'] . " Two Wheeler Loan EMI Calculator 2026 - Bike & Scooter Loan | Thiyagi.com"; ?></title>
    <meta name="description" content="<?php echo "Calculate " . $bank['name'] . " two-wheeler loan EMI for bikes and scooters in 2026. Interest rates from " . $bank['minRate'] . "% to " . $bank['maxRate'] . "%. Get instant EMI calculation, eligibility, and apply online."; ?>">
    <meta name="keywords" content="<?php echo $bank['name'] . " two wheeler loan, bike loan EMI calculator, scooter loan " . strtolower(str_replace(' ', '', $bank['name'])) . ", vehicle loan calculator 2026"; ?>">
    <link rel="canonical" href="<?php echo "https://www.thiyagi.com/calculators/two-wheeler-loan/" . $bankSlug; ?>">
    <link href="https://www.thiyagi.com/nt.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802" crossorigin="anonymous"></script>
    <meta name="google-adsense-account" content="ca-pub-1381776395680802">
    
    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FinancialProduct",
        "name": "<?php echo $bank['name']; ?> Two Wheeler Loan",
        "description": "Calculate EMI for <?php echo $bank['name']; ?> two-wheeler loans with interest rates from <?php echo $bank['minRate']; ?>% to <?php echo $bank['maxRate']; ?>%",
        "provider": {
            "@type": "FinancialService",
            "name": "<?php echo $bank['name']; ?>",
            "serviceType": "Two Wheeler Loan"
        },
        "interestRate": "<?php echo $bank['minRate']; ?>%-<?php echo $bank['maxRate']; ?>%",
        "feesAndCommissionsSpecification": "Varies based on loan amount and tenure"
    }
    </script>
    
    <!-- Clarity tracking code for https://www.thiyagi.com/ -->
    <script>
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "su9bgvyyjw");
    </script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5PGTVJ1CV1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-5PGTVJ1CV1');
    </script>
</head>
<body>



<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-motorcycle text-2xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php echo $bank['name']; ?> Two Wheeler Loan Calculator</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">Calculate your <?php echo $bank['name']; ?> bike & scooter loan EMI with current 2026 rates (<?php echo $bank['minRate']; ?>% - <?php echo $bank['maxRate']; ?>%)</p>
                
                <!-- Bank Type Badge -->
                <div class="mt-4">
                    <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-university mr-2"></i><?php echo $bank['type']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm">
            <a href="https://www.thiyagi.com/" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2 text-gray-500">/</span>
            <a href="/calculators/" class="text-blue-600 hover:underline">Calculators</a>
            <span class="mx-2 text-gray-500">/</span>
            <a href="/calculators/all-banks-two-wheeler-loan-calculators" class="text-blue-600 hover:underline">Two Wheeler Loans</a>
            <span class="mx-2 text-gray-500">/</span>
            <span class="text-gray-700"><?php echo $bank['name']; ?></span>
        </nav>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Calculator Input Section -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-sliders-h text-blue-600 mr-3"></i>
                        Loan Details
                    </h2>
                    
                    <form id="emiForm" class="space-y-6">
                        <!-- Loan Amount -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-rupee-sign text-blue-600 mr-2"></i>
                                Vehicle Price / Loan Amount
                            </label>
                            <div class="relative">
                                <input type="range" id="principalRange" min="30000" max="500000" step="5000" value="<?php echo $defaultPrincipal; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-blue-200 to-blue-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="principalInput" value="<?php echo number_format($defaultPrincipal); ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter vehicle price">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>₹30,000</span>
                                <span>₹5,00,000</span>
                            </div>
                        </div>

                        <!-- Interest Rate -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-percentage text-green-600 mr-2"></i>
                                Annual Interest Rate (<?php echo $bank['minRate']; ?>% - <?php echo $bank['maxRate']; ?>%)
                            </label>
                            <div class="relative">
                                <input type="range" id="rateRange" min="<?php echo $bank['minRate']; ?>" max="<?php echo $bank['maxRate']; ?>" step="0.1" value="<?php echo $defaultRate; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-green-200 to-green-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="rateInput" value="<?php echo $defaultRate; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter interest rate">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span><?php echo $bank['minRate']; ?>%</span>
                                <span><?php echo $bank['maxRate']; ?>%</span>
                            </div>
                        </div>

                        <!-- Loan Tenure -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-calendar-alt text-purple-600 mr-2"></i>
                                Loan Tenure (Months)
                            </label>
                            <div class="relative">
                                <input type="range" id="tenureRange" min="6" max="84" step="6" value="<?php echo $defaultTenure; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-purple-200 to-purple-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="tenureInput" value="<?php echo $defaultTenure; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter tenure in months">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>6 months</span>
                                <span>84 months (7 years)</span>
                            </div>
                            <div class="text-center">
                                <span id="tenureYears" class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    3 years
                                </span>
                            </div>
                        </div>

                        <!-- Quick Amount Buttons -->
                        <div class="space-y-3">
                            <label class="text-sm font-semibold text-gray-700">Quick Vehicle Price Selection</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button type="button" onclick="setAmount(50000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹50K</button>
                                <button type="button" onclick="setAmount(100000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹1 Lakh</button>
                                <button type="button" onclick="setAmount(150000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹1.5 Lakh</button>
                                <button type="button" onclick="setAmount(250000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹2.5 Lakh</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="lg:col-span-2 space-y-6">
                <!-- EMI Results Cards -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-calendar-check text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Monthly EMI</span>
                        </div>
                        <div id="emiAmount" class="text-3xl font-bold mb-2">₹4,950</div>
                        <div class="text-sm opacity-90">Equated Monthly Installment</div>
                    </div>

                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-chart-line text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Total Interest</span>
                        </div>
                        <div id="totalInterest" class="text-3xl font-bold mb-2">₹28,200</div>
                        <div class="text-sm opacity-90">Interest over loan tenure</div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-coins text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Total Amount</span>
                        </div>
                        <div id="totalAmount" class="text-3xl font-bold mb-2">₹1,78,200</div>
                        <div class="text-sm opacity-90">Principal + Interest</div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-pie text-indigo-600 mr-3"></i>
                            Loan Breakdown
                        </h3>
                        <div class="w-full h-64 sm:h-80 flex items-center justify-center">
                            <canvas id="pieChart" class="max-w-full max-h-full"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-bar text-green-600 mr-3"></i>
                            Payment Schedule
                        </h3>
                        <div class="w-full h-64 sm:h-80 flex items-center justify-center">
                            <canvas id="barChart" class="max-w-full max-h-full"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Bank Information -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-university text-blue-600 mr-3"></i>
                        <?php echo $bank['name']; ?> Two Wheeler Loan Details
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Features -->
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-star text-yellow-500 mr-2"></i>
                                Key Features
                            </h4>
                            <ul class="space-y-2">
                                <?php foreach ($bank['features'] as $feature): ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-sm"></i>
                                        <span class="text-gray-600 text-sm"><?php echo $feature; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Eligibility -->
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-user-check text-blue-500 mr-2"></i>
                                Eligibility Criteria
                            </h4>
                            <ul class="space-y-2">
                                <?php foreach ($bank['eligibility'] as $criteria): ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-arrow-right text-blue-400 mr-2 mt-1 text-sm"></i>
                                        <span class="text-gray-600 text-sm"><?php echo $criteria; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Documents Required -->
                    <div class="mt-6">
                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-file-alt text-orange-500 mr-2"></i>
                            Documents Required
                        </h4>
                        <div class="grid md:grid-cols-2 gap-4">
                            <?php foreach ($bank['documents'] as $document): ?>
                                <div class="flex items-start">
                                    <i class="fas fa-document text-orange-400 mr-2 mt-1 text-sm"></i>
                                    <span class="text-gray-600 text-sm"><?php echo $document; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Amortization Schedule -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-table text-orange-600 mr-3"></i>
                        Amortization Schedule (First 12 Months)
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700">
                                    <th class="px-4 py-3 text-left font-semibold">Month</th>
                                    <th class="px-4 py-3 text-right font-semibold">EMI</th>
                                    <th class="px-4 py-3 text-right font-semibold">Principal</th>
                                    <th class="px-4 py-3 text-right font-semibold">Interest</th>
                                    <th class="px-4 py-3 text-right font-semibold">Balance</th>
                                </tr>
                            </thead>
                            <tbody id="scheduleTable" class="divide-y divide-gray-200">
                                <!-- Populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Content Section -->
        <div class="mt-12 bg-white rounded-2xl shadow-xl p-8">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold text-gray-800 mb-6"><?php echo $bank['name']; ?> Two Wheeler Loan - Complete Guide 2026</h2>
                
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Interest Rate Range</h3>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2"><?php echo $bank['minRate']; ?>% - <?php echo $bank['maxRate']; ?>%</div>
                        <div class="text-gray-600">Per Annum (Reducing Balance)</div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                            About <?php echo $bank['name']; ?> Two Wheeler Loans
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo $bank['name']; ?> offers competitive two-wheeler loans for bikes and scooters with interest rates starting from <?php echo $bank['minRate']; ?>%. 
                            As a <?php echo strtolower($bank['type']); ?>, <?php echo $bank['name']; ?> provides reliable financing solutions with flexible repayment options.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calculator text-green-500 mr-2"></i>
                            Why Choose <?php echo $bank['name']; ?>?
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            With a track record in <?php echo strtolower($bank['type']); ?> services, <?php echo $bank['name']; ?> offers streamlined loan processing, 
                            competitive rates, and customer-centric policies that make vehicle financing accessible and affordable.
                        </p>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h3>
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">What is the current interest rate for <?php echo $bank['name']; ?> two-wheeler loans?</h4>
                        <p class="text-gray-600"><?php echo $bank['name']; ?> offers two-wheeler loans at interest rates ranging from <?php echo $bank['minRate']; ?>% to <?php echo $bank['maxRate']; ?>% per annum, depending on your credit profile and loan amount.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">How can I apply for a <?php echo $bank['name']; ?> two-wheeler loan?</h4>
                        <p class="text-gray-600">You can apply for a <?php echo $bank['name']; ?> two-wheeler loan online through their official website, visit the nearest branch, or contact their customer service team for assistance with the application process.</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">What is the maximum loan amount and tenure available?</h4>
                        <p class="text-gray-600">Loan amounts typically range up to ₹5 lakhs depending on the vehicle and your eligibility. Tenure options generally extend up to 7 years (84 months) with flexible EMI options.</p>
                    </div>
                    
                    <div class="border-l-4 border-orange-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Is there any processing fee for <?php echo $bank['name']; ?> two-wheeler loans?</h4>
                        <p class="text-gray-600">Processing fees vary but are typically 0.5% to 2% of the loan amount. Some promotional offers may waive processing fees. Please check current terms and conditions with <?php echo $bank['name']; ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let pieChart, barChart;

// Initialize charts
function initCharts() {
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const barCtx = document.getElementById('barChart').getContext('2d');
    
    pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Principal Amount', 'Total Interest'],
            datasets: [{
                data: [<?php echo $defaultPrincipal; ?>, 0],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)'
                ],
                borderColor: [
                    'rgba(59, 130, 246, 1)',
                    'rgba(16, 185, 129, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
    
    barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [{
                label: 'Principal',
                data: [],
                backgroundColor: 'rgba(59, 130, 246, 0.8)'
            }, {
                label: 'Interest',
                data: [],
                backgroundColor: 'rgba(16, 185, 129, 0.8)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true
                }
            }
        }
    });
}

// Update calculations
function updateCalculations() {
    const principal = parseFloat(document.getElementById('principalInput').value.replace(/,/g, '')) || <?php echo $defaultPrincipal; ?>;
    const rate = parseFloat(document.getElementById('rateInput').value) || <?php echo $defaultRate; ?>;
    const tenure = parseInt(document.getElementById('tenureInput').value) || <?php echo $defaultTenure; ?>;
    
    fetch(`?ajax=1&principal=${principal}&rate=${rate}&tenure=${tenure}`)
        .then(response => response.json())
        .then(data => {
            // Update result cards
            document.getElementById('emiAmount').textContent = data.formatted.emi;
            document.getElementById('totalInterest').textContent = data.formatted.totalInterest;
            document.getElementById('totalAmount').textContent = data.formatted.totalPayment;
            
            // Update charts
            pieChart.data.datasets[0].data = [data.principal, data.totalInterest];
            pieChart.update();
            
            // Update bar chart
            barChart.data.labels = data.schedule.map(item => `Month ${item.month}`);
            barChart.data.datasets[0].data = data.schedule.map(item => item.principal);
            barChart.data.datasets[1].data = data.schedule.map(item => item.interest);
            barChart.update();
            
            // Update amortization table
            updateAmortizationTable(data.schedule);
        })
        .catch(error => console.error('Error:', error));
}

// Update amortization table
function updateAmortizationTable(schedule) {
    const tbody = document.getElementById('scheduleTable');
    tbody.innerHTML = '';
    
    schedule.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td class="px-4 py-3 font-medium">${row.month}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.emi).toLocaleString()}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.principal).toLocaleString()}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.interest).toLocaleString()}</td>
            <td class="px-4 py-3 text-right font-medium">₹${Math.round(row.balance).toLocaleString()}</td>
        `;
        tbody.appendChild(tr);
    });
}

// Sync sliders and inputs
function setupInputSyncronization() {
    const principalRange = document.getElementById('principalRange');
    const principalInput = document.getElementById('principalInput');
    const rateRange = document.getElementById('rateRange');
    const rateInput = document.getElementById('rateInput');
    const tenureRange = document.getElementById('tenureRange');
    const tenureInput = document.getElementById('tenureInput');
    const tenureYears = document.getElementById('tenureYears');

    // Principal sync
    principalRange.addEventListener('input', function() {
        principalInput.value = parseInt(this.value).toLocaleString();
        updateCalculations();
    });

    principalInput.addEventListener('input', function() {
        const value = this.value.replace(/,/g, '');
        if (!isNaN(value) && value !== '') {
            principalRange.value = value;
            this.value = parseInt(value).toLocaleString();
        }
        updateCalculations();
    });

    // Rate sync
    rateRange.addEventListener('input', function() {
        rateInput.value = this.value;
        updateCalculations();
    });

    rateInput.addEventListener('input', function() {
        rateRange.value = this.value;
        updateCalculations();
    });

    // Tenure sync
    tenureRange.addEventListener('input', function() {
        tenureInput.value = this.value;
        const years = Math.round(this.value / 12 * 10) / 10;
        tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
        updateCalculations();
    });

    tenureInput.addEventListener('input', function() {
        tenureRange.value = this.value;
        const years = Math.round(this.value / 12 * 10) / 10;
        tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
        updateCalculations();
    });
}

// Set quick amount
function setAmount(amount) {
    document.getElementById('principalInput').value = amount.toLocaleString();
    document.getElementById('principalRange').value = amount;
    updateCalculations();
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    setupInputSyncronization();
    updateCalculations();
});
</script>

<?php include '../footer.php';?>
</body>
</html>