<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Chat | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="support-chat-section">
    <div class="container">

        <div class="support-chat-window">

            <header class="support-chat-header">
                <a href="trip-details.php" class="support-chat-back" aria-label="Back">
                    <i class="bi bi-chevron-left"></i>
                </a>

                <div class="support-chat-avatar">
                    <i class="bi bi-headset"></i>
                </div>

                <div class="support-chat-title">
                    <h2>Nakamura Support</h2>
                    <span class="support-chat-status">
                        <span class="support-chat-dot"></span>
                        Online
                    </span>
                </div>

                <div class="support-chat-controls">
                    <button type="button" class="support-chat-ctrl" aria-label="More">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>

                    <button type="button" class="support-chat-ctrl" aria-label="Minimize">
                        <i class="bi bi-dash-lg"></i>
                    </button>

                    <button type="button" class="support-chat-ctrl" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </header>

            <div class="support-chat-body" id="supportChatBody">

                <div class="support-chat-day">
                    <span>Today</span>
                </div>

                <div class="support-chat-message support-chat-from-bot">
                    <div class="support-chat-avatar support-chat-avatar-sm">
                        <i class="bi bi-headset"></i>
                    </div>

                    <div class="support-chat-bubble">
                        <p>Hi John <span class="support-chat-emoji">&#128075;</span><br>
                        Thank you for contacting Nakamura Tours &amp; Travels. How can we help you today?</p>
                        <span class="support-chat-time">10:30 AM</span>
                    </div>
                </div>

                <div class="support-chat-message support-chat-from-user">
                    <div class="support-chat-bubble">
                        <p>I need help with my Paris trip booking. I want to change my return date.</p>
                        <span class="support-chat-time">
                            10:31 AM
                            <i class="bi bi-check2-all"></i>
                        </span>
                    </div>
                </div>

                <div class="support-chat-message support-chat-from-bot">
                    <div class="support-chat-avatar support-chat-avatar-sm">
                        <i class="bi bi-headset"></i>
                    </div>

                    <div class="support-chat-bubble">
                        <p>Sure, I'd be happy to help you with that. Can you please share your booking reference (PNR)?</p>
                        <span class="support-chat-time">10:31 AM</span>
                    </div>
                </div>

                <div class="support-chat-message support-chat-from-user">
                    <div class="support-chat-bubble support-chat-bubble-inline">
                        <p>NT123AB77</p>
                        <span class="support-chat-time">
                            10:32 AM
                            <i class="bi bi-check2-all"></i>
                        </span>
                    </div>
                </div>

                <div class="support-chat-message support-chat-from-bot">
                    <div class="support-chat-avatar support-chat-avatar-sm">
                        <i class="bi bi-headset"></i>
                    </div>

                    <div class="support-chat-bubble support-chat-bubble-inline">
                        <p>Let me check that for you&hellip;</p>
                        <span class="support-chat-time">10:32 AM</span>
                    </div>
                </div>

                <div class="support-chat-message support-chat-from-bot">
                    <div class="support-chat-avatar support-chat-avatar-sm" aria-hidden="true"></div>

                    <div class="support-chat-bubble support-chat-typing-bubble" aria-label="Support is typing">
                        <span class="support-chat-typing-dot"></span>
                        <span class="support-chat-typing-dot"></span>
                        <span class="support-chat-typing-dot"></span>
                    </div>
                </div>

            </div>

            <footer class="support-chat-footer">
                <form action="#" method="post" class="support-chat-form" id="supportChatForm">
                    <button type="button" class="support-chat-attach" aria-label="Attach file">
                        <i class="bi bi-paperclip"></i>
                    </button>

                    <input
                        type="text"
                        class="support-chat-input"
                        id="supportChatInput"
                        name="message"
                        placeholder="Type your message..."
                        autocomplete="off"
                    >

                    <button type="submit" class="support-chat-send" aria-label="Send message">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </form>

                <p class="support-chat-reply-note">We typically reply in a few minutes</p>
            </footer>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
