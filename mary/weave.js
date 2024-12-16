// script.js
window.onload = function() {
    const likeButton = document.querySelector('.like-button');
    const likeCount = document.querySelector('.like-count');
    const commentInput = document.querySelector('.comment-input');
    const postCommentButton = document.querySelector('.post-comment-button');
    const commentList = document.querySelector('.comment-list');

    let likes = 0;

    likeButton.addEventListener('click', () => {
        likes++;
        likeCount.textContent = likes;
    });

    postCommentButton.addEventListener('click', () => {
        const commentText = commentInput.value;
        if (commentText.trim() !== '') {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.textContent = commentText;
            commentList.appendChild(commentElement);
            commentInput.value = '';
        }
    });

};