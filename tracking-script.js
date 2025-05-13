const cursor = document.getElementById('cursor');
        const progressFill = document.getElementById('progressFill');
        const progressBar = document.querySelector('.progress-bar');
        
        let isDragging = false;
        let progress = 0;
        
        // Initialize progress
        updateProgress(0);
        
        // Mouse events
        cursor.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', endDrag);
        
        // Touch events
        cursor.addEventListener('touchstart', startDrag);
        document.addEventListener('touchmove', drag);
        document.addEventListener('touchend', endDrag);
        
        // Click to jump
        progressBar.addEventListener('click', (e) => {
            if (!isDragging) {
                const rect = progressBar.getBoundingClientRect();
                const clickPosition = e.clientX - rect.left;
                const newProgress = (clickPosition / rect.width) * 100;
                updateProgress(newProgress);
            }
        });
        
        function startDrag(e) {
            e.preventDefault();
            isDragging = true;
            cursor.style.cursor = 'grabbing';
        }
        
        function drag(e) {
            if (!isDragging) return;
            
            e.preventDefault();
            const rect = progressBar.getBoundingClientRect();
            let clientX = e.clientX || (e.touches && e.touches[0].clientX);
            
            let position = clientX - rect.left;
            position = Math.max(0, Math.min(position, rect.width));
            const newProgress = (position / rect.width) * 100;
            updateProgress(newProgress);
        }
        
        function endDrag() {
            isDragging = false;
            cursor.style.cursor = 'grab';
        }
        
        function updateProgress(newProgress) {
            progress = newProgress;
            progressFill.style.width = `${progress}%`;
            cursor.style.left = `${progress}%`;
        }