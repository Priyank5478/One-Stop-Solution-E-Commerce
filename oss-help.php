<?php require_once('header.php'); ?>
<div class="page oss-help">
    <div class="container">
        <h1 class="text-center">Help Center</h1>
        <div class="tabs">
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="shipping">Shipping</button>
                <button class="tab-btn" data-tab="payment">Payment</button>
                <button class="tab-btn" data-tab="returns">Returns</button>
            </div>

            <!-- Shipping Tab -->
            <div class="tab-content active" id="shipping">
                <h2>Shipping Information</h2>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Shipping Options</h3>
                    </div>
                    <div class="card-content">
                        <div class="accordion">
                            <div class="accordion-item">
                                <button class="accordion-trigger">Standard Shipping</button>
                                <div class="accordion-content">
                                    <p>Delivery within 5-7 business days. Free for orders over $50, otherwise $4.99.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-trigger">Express Shipping</button>
                                <div class="accordion-content">
                                    <p>Delivery within 2-3 business days. Flat rate of $9.99.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-trigger">Next Day Delivery</button>
                                <div class="accordion-content">
                                    <p>Order by 2 PM for delivery next business day. $14.99 for orders under $100, free for orders over $100.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-trigger">International Shipping</button>
                                <div class="accordion-content">
                                    <p>Delivery times vary by destination. Rates start at $14.99. Please note that additional customs fees may apply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Shipping Policies</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>All orders are processed within 1-2 business days.</li>
                            <li>Shipping times are estimates and are not guaranteed.</li>
                            <li>We ship to all 50 US states and to over 180 countries worldwide.</li>
                            <li>For international orders, the customer is responsible for any customs or duty fees.</li>
                            <li>We offer free returns on domestic orders within 30 days of delivery.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Payment Tab -->
            <div class="tab-content" id="payment">
                <h2>Payment Information</h2>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Accepted Payment Methods</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>Credit Cards (Visa, MasterCard, American Express, Discover)</li>
                            <li>PayPal</li>
                            <li>Apple Pay</li>
                            <li>Google Pay</li>
                            <li>Shop Pay</li>
                            <li>Bank Transfer (for select countries)</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Payment Security</h3>
                    </div>
                    <div class="card-content">
                        <p>We take your payment security seriously. Here's how we protect your information:</p>
                        <ul>
                            <li>All transactions are encrypted using SSL technology.</li>
                            <li>We are PCI DSS compliant, ensuring your card data is handled securely.</li>
                            <li>We never store your full credit card information on our servers.</li>
                            <li>Our payment systems are regularly audited for security compliance.</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Billing and Pricing</h3>
                    </div>
                    <div class="card-content">
                        <div class="accordion">
                            <div class="accordion-item">
                                <button class="accordion-trigger">When will I be charged?</button>
                                <div class="accordion-content">
                                    <p>Your card will be charged when your order is shipped. For pre-orders or backorders, you'll be charged when the item becomes available and ships.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-trigger">Do you offer price matching?</button>
                                <div class="accordion-content">
                                    <p>Yes, we offer price matching for identical items sold by major retailers. Contact our customer service within 14 days of your purchase with proof of the lower price.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-trigger">How do you handle sales tax?</button>
                                <div class="accordion-content">
                                    <p>Sales tax is calculated based on your shipping address and the current tax rates for that location. The exact amount will be shown at checkout before you complete your purchase.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="returns">
                <div class="section-header">
                    <h2>Returns & Refunds</h2>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Return Policy</h3>
                        <p class="card-description">Our 30-day satisfaction guarantee</p>
                    </div>
                    <div class="card-content">
                        <p class="mb-2">We want you to be completely satisfied with your purchase. If for any reason you're not happy with your
                            order, you can return most items within 30 days of delivery for a full refund or exchange.</p>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Return Eligibility</h3>
                                <p>Items must be unused, unworn, unwashed, and in their original packaging with all tags attached.
                                    Certain categories like intimate apparel, personalized items, and perishable goods cannot be
                                    returned for hygiene or customization reasons.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Return Shipping</h3>
                                <p>For standard returns, customers are responsible for return shipping costs unless the item is
                                    defective or we made an error. We provide a prepaid return label for a flat fee of $5.99, which
                                    will be deducted from your refund amount.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Refund Processing</h3>
                                <p>Once we receive your return, we'll inspect the item and process your refund within 3-5 business days.
                                    Refunds will be issued to the original payment method. Please allow 5-10 business days for the refund
                                    to appear in your account, depending on your financial institution.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">How to Return an Item</h3>
                        <p class="card-description">Simple step-by-step return process</p>
                    </div>
                    <div class="card-content">
                        <ol style="padding-left: 20px;">
                            <li style="margin-bottom: 15px;font-size: 16px;">
                                <h3 style="font-size: 16px; margin-bottom: 5px;">Initiate your return</h3>
                                <p class="text-small text-muted">
                                    Log into your account, go to "Order History," select the order containing the item you wish to return,
                                    and click "Return Item." Alternatively, you can contact our customer service team for assistance.
                                </p>
                            </li>

                            <li style="margin-bottom: 15px;font-size: 16px;">
                                <h3 style="font-size: 16px; margin-bottom: 5px;">Select return reason</h3>
                                <p class="text-small text-muted">
                                    Choose the reason for your return from the dropdown menu and indicate whether you want a refund or
                                    an exchange. For exchanges, select the replacement item's size, color, or variant.
                                </p>
                            </li>

                            <li style="margin-bottom: 15px;font-size: 16px;">
                                <h3 style="font-size: 16px; margin-bottom: 5px;">Print return label</h3>
                                <p class="text-small text-muted">
                                    Print the return shipping label provided. If you don't have a printer, you can request to have a
                                    return label mailed to you, or you can write down the return authorization number to include with your package.
                                </p>
                            </li>

                            <li style="margin-bottom: 15px;font-size: 16px;">
                                <h3 style="font-size: 16px; margin-bottom: 5px;">Package your return</h3>
                                <p class="text-small text-muted">
                                    Place the item(s) in their original packaging if possible, or use a secure box or envelope. Include all
                                    original tags, accessories, and documentation. Attach the return label to the outside of the package.
                                </p>
                            </li>

                            <li style="font-size: 16px;">
                                <h3 style="font-size: 16px; margin-bottom: 5px;">Ship your return</h3>
                                <p class="text-small text-muted">
                                    Drop off your package at any authorized shipping location. We recommend keeping the tracking number
                                    for your records until your return is processed.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            button.classList.add('active');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Accordion functionality
    const accordionTriggers = document.querySelectorAll('.accordion-trigger');

    accordionTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            trigger.classList.toggle('active');
            const content = trigger.nextElementSibling;
            content.classList.toggle('active');

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });
</script>
<?php require_once('footer.php'); ?>