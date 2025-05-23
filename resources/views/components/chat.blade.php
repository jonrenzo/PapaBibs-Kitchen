<style>
    .typing-indicator {
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .typing-dot {
        width: 8px;
        height: 8px;
        background-color: #94a3b8;
        border-radius: 50%;
        animation: typing 1.4s infinite;
    }
    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }
    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }
    @keyframes typing {
        0%, 60%, 100% {
            transform: translateY(0);
        }
        30% {
            transform: translateY(-10px);
        }
    }
    .chat-message {
        animation: fadeIn 0.3s ease-in;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<!-- Chat Button (Fixed Position) -->
<!-- Chat Button (Fixed Position) -->
<div class="fixed bottom-6 right-6 z-50">
    <button type="button" id="chat-toggle" class="bg-red-600 hover:bg-yellow-500 flex items-center justify-center w-14 h-14 rounded-full text-white shadow-lg transition-all duration-300 transform hover:scale-110">
        <svg id="chat-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<!-- Chat Modal -->
<div id="chat-modal" class="fixed bottom-24 right-6 z-40 hidden">
    <div class="flex flex-col bg-white border border-white shadow-2xl rounded-xl w-80 h-96 overflow-hidden">
        <!-- Chat Header -->
        <div class="flex justify-between items-center py-3 px-4 bg-bibs-red text-white">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                <div>
                    <h3 class="font-semibold text-sm">PapaBibs</h3>
                    <p class="text-xs text-blue-100">Online now</p>
                </div>
            </div>
            <button type="button" id="minimize-chat" class="p-1 hover:bg-blue-700 rounded">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div id="chat-messages" class="flex-1 p-4 overflow-y-auto bg-gray-50 space-y-3">
            <!-- Welcome Messages -->
            <div class="chat-message">
                <div class="flex items-start gap-2">
                    <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="./images/bibs-logo-image.png" alt="PapaBibs Logo" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-3 rounded-lg shadow-sm max-w-xs">
                        <p class="text-sm text-gray-800">👋 Hi! I'm here to help you with questions about our business. What would you like to know?</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Typing Indicator -->
        <div id="typing-indicator" class="px-4 py-2 hidden">
            <div class="flex items-start gap-2">
                <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                    <img src="./images/bibs-logo-image.png" alt="PapaBibs Logo" class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm">
                    <div class="typing-indicator">
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="p-3 bg-white border-t">
            <form id="chat-form" class="flex items-center gap-2">
                <input
                    type="text"
                    id="chat-input"
                    class="flex-1 py-2 px-3 border border-gray-200 rounded-full text-sm focus:border-bibs-yellow focus:ring-1 focus:ring-bibs-yellow outline-none"
                    placeholder="Ask me anything..."
                    autocomplete="off"
                >
                <button
                    type="submit"
                    id="send-button"
                    class="w-10 h-10 bg-bibs-red hover:bg-red-800 text-white rounded-full flex items-center justify-center transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    // Chat functionality
    class BusinessChatbot {
        constructor() {
            this.isOpen = false;
            this.isTyping = false;
            this.initializeElements();
            this.setupEventListeners();
            this.setupBusinessKnowledge();
        }

        initializeElements() {
            this.chatToggle = document.getElementById('chat-toggle');
            this.chatModal = document.getElementById('chat-modal');
            this.chatForm = document.getElementById('chat-form');
            this.chatInput = document.getElementById('chat-input');
            this.chatMessages = document.getElementById('chat-messages');
            this.sendButton = document.getElementById('send-button');
            this.typingIndicator = document.getElementById('typing-indicator');
            this.chatIcon = document.getElementById('chat-icon');
            this.closeIcon = document.getElementById('close-icon');
            this.minimizeChat = document.getElementById('minimize-chat');
        }

        setupEventListeners() {
            this.chatToggle.addEventListener('click', () => this.toggleChat());
            this.minimizeChat.addEventListener('click', () => this.toggleChat());
            this.chatForm.addEventListener('submit', (e) => this.handleSubmit(e));
            this.chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.handleSubmit(e);
                }
            });
        }

        setupBusinessKnowledge() {
            // Add your business information here
            this.businessInfo = {
                name: "PapaBibs Kitchen",
                hours: "Monday-Friday: 9AM-6PM, Saturday: 10AM-4PM, Sunday: Closed",
                location: "8539 Sandoval Ave, Pasig City,Metro Manila, 1602",
                phone: "0925-510-0513 or (02)87215065",
                email: "papabibskitchenmain@gmail.com",
                payment: [
                    "GCash",
                    "Cash on Delivery",
                    "Bank Transfer",
                    "Credit/Debit Card"
                ],
                order:[
                    "Online Ordering",
                    "Phone Orders",
                    "Walk-in Orders"
                ],
                services: [
                    "Food Delivery",
                    "Catering Services",
                    "Event Planning",
                    "Online Ordering"
                ],
                faqs: {
                    "hours": "We're open Monday-Friday 9AM-6PM, Saturday 10AM-4PM, and closed on Sunday.",
                    "location": "You can find us at <a class='font-bold' href='https://www.google.com/maps/place/PapaBibs+Kitchen/@14.5491976,121.1031775,21z/data=!4m15!1m8!3m7!1s0x3397c64a8ec48381:0x98d815f1f6201faf!2sG4X3%2BP84,+8539+Sandoval+Ave,+Pasig,+1611+Metro+Manila!3b1!8m2!3d14.5491521!4d121.103228!16s%2Fg%2F11rg69404j!3m5!1s0x3397c79db41442b3:0xd31fcfd67ca240f!8m2!3d14.5492861!4d121.1032929!16s%2Fg%2F11t6wx2s1t?entry=ttu&g_ep=EgoyMDI1MDUyMS4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D'>8539 Sandoval Ave, Pasig City, Metro Manila, 1602.</a>",
                    "contact": "You can reach us at 0925-510-0513 or (02)8721506 or <a class='font-bold' href='https://mail.google.com/mail/?view=cm&to=papabibskitchenmain@gmail.com' target='_blank'>papabibskitchenmain@gmail.com</a>",
                    "services": "We offer various services including Food Delivery, Catering Services, Event Planning, and Online Ordering.",
                    "pricing": "All of our prices are shown in each dish's description. If you have any specific questions about pricing, feel free to ask!",
                    "payment": "We accept GCash,Cash on Delivery, Bank Transfer, and Credit/Debit Card payments.",
                    "order": "You can place an order through our website or by our facebook page. <a href='/register' class='font-bold'>Register</a> your email or <a href='/login' class='font-bold'>login</a> using Google or Facebook to get started.",
                    "menu": "Here's a link to our menu: <a href='/menu' class='font-bold'>Menu</a>. You can also ask about specific dishes or ingredients.",
                }
            };
        }

        toggleChat() {
            this.isOpen = !this.isOpen;

            if (this.isOpen) {
                this.chatModal.classList.remove('hidden');
                this.chatIcon.classList.add('hidden');
                this.closeIcon.classList.remove('hidden');
                this.chatInput.focus();
            } else {
                this.chatModal.classList.add('hidden');
                this.chatIcon.classList.remove('hidden');
                this.closeIcon.classList.add('hidden');
            }
        }

        async handleSubmit(e) {
            e.preventDefault();

            const message = this.chatInput.value.trim();
            if (!message || this.isTyping) return;

            this.addUserMessage(message);
            this.chatInput.value = '';
            this.showTyping();

            // Simulate AI response delay
            setTimeout(() => {
                const response = this.generateResponse(message);
                this.hideTyping();
                this.addBotMessage(response);
            }, 1000 + Math.random() * 2000);
        }

        addUserMessage(message) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'chat-message flex justify-end';
            messageDiv.innerHTML = `
            <div class="bg-bibs-red text-white p-3 rounded-lg max-w-xs">
                <p class="text-sm">${this.escapeHtml(message)}</p>
            </div>
        `;
            this.chatMessages.appendChild(messageDiv);
            this.scrollToBottom();
        }

        addBotMessage(message) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'chat-message';
            messageDiv.innerHTML = `
            <div class="flex items-start gap-2">
                <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                    <img src="./images/bibs-logo-image.png" alt="PapaBibs Logo" class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm max-w-xs">
                    <p class="text-sm text-gray-800">${message}</p>
                </div>
            </div>
        `;
            this.chatMessages.appendChild(messageDiv);
            this.scrollToBottom();
        }

        showTyping() {
            this.isTyping = true;
            this.typingIndicator.classList.remove('hidden');
            this.sendButton.disabled = true;
            this.scrollToBottom();
        }

        hideTyping() {
            this.isTyping = false;
            this.typingIndicator.classList.add('hidden');
            this.sendButton.disabled = false;
        }

        generateResponse(userMessage) {
            const message = userMessage.toLowerCase();

            if (message.includes('pay') || message.includes('payment') || message.includes('payment methods')) {
                return this.businessInfo.faqs.payment;
            }

            if (message.includes('order') || message.includes('place order') || message.includes('food')) {
                return this.businessInfo.faqs.order;
            }

            if (message.includes('hour') || message.includes('open') || message.includes('close')) {
                return this.businessInfo.faqs.hours;
            }

            if (message.includes('location') || message.includes('address') || message.includes('where')) {
                return this.businessInfo.faqs.location;
            }

            if (message.includes('contact') || message.includes('phone') || message.includes('email')) {
                return this.businessInfo.faqs.contact;
            }

            if (message.includes('service') || message.includes('offer') || message.includes('do')) {
                return this.businessInfo.faqs.services;
            }

            if (message.includes('price') || message.includes('cost') || message.includes('how much')) {
                return this.businessInfo.faqs.pricing;
            }

            if (message.includes('menu') || message.includes('dish') || message.includes('foods')) {
                return this.businessInfo.faqs.menu;
            }

            if (message.includes('hello') || message.includes('hi') || message.includes('hey')) {
                return "Hello! How can I help you today? Feel free to ask about our services, hours, location, or anything else!";
            }

            return "Thanks for your question! I'd be happy to help you with information about our services, hours, location, or contact details. What would you like to know?";
        }

        scrollToBottom() {
            setTimeout(() => {
                this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
            }, 100);
        }

        escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        new BusinessChatbot();
    });
</script>
