const user_lrn = document.querySelector('#userlrn');
const level1 = document.querySelector(".level1");
let totalNoteValue1 = 0;
let totalNoteValue2 = 0;
let totalNoteValue3 = 0;
let totalNoteValue4 = 0;
let totalNoteValue5 = 0;
let totalNoteValue6 = 0;
let totalNoteValue7 = 0;
let totalNoteValue8 = 0;

let part1 = 0;
let part2 = 0;
let part3 = 0;
let part4 = 0;

let part1Score = 0;
let part2Score = 0;
let part3Score = 0;
let part4Score = 0;

let noteValues = {
    wholeNote: 4,
    halfNote: 2,
    quarterNote: 1,
    eightNote: 0.5,
    sixteenthNote: 0.25,
    wholeRest: 4,
    halfRest: 2,
    quarterRest: 1,
    eightRest: 0.5,
    sixteenRest: 0.25,
};

let isShapeInContainer = {
    '1': false,
    '2': false,
    '3': false,
    '4': false,
    '5': false,
    '6': false,
    '7': false,
    '8': false,
};

let draggedShape = null;
let offsetX, offsetY;
let initialPosition = {};
let isDropped = {};
let droppedShapes = [];

$(document).ready(function () {
    // Save initial positions of shapes and bind events
    document.querySelectorAll('.shape').forEach(shape => {
        initialPosition[shape.id] = { left: shape.offsetLeft, top: shape.offsetTop };
        isDropped[shape.id] = false;
    
        // Add event listeners to capture the background image on click or touch
        shape.addEventListener('mousedown', (e) => {
            const bgImage = window.getComputedStyle(e.target).backgroundImage;
            startDrag(e, bgImage);
            
        });
        
        shape.addEventListener('touchstart', (e) => {
            const bgImage = window.getComputedStyle(e.target).backgroundImage;
            startDrag(e, bgImage);
        }, { passive: false });
    });
    

    function startDrag(e, bgImage) {
        e.preventDefault(); // Prevent default touch behavior

        // Clone the shape
        draggedShape = e.target.cloneNode(true);
        draggedShape.style.position = 'absolute';
        draggedShape.id = `${e.target.id}-clone-${Date.now()}`;
        draggedShape.dataset.containerId = null;
        draggedShape.style.backgroundImage = bgImage;  // Add background image
        draggedShape.style.backgroundSize = 'contain';  // Optional: to make sure the image covers the entire element
        document.body.appendChild(draggedShape);
        
        

        if (e.type === 'mousedown') {
            offsetX = e.offsetX;
            offsetY = e.offsetY;
            document.addEventListener('mousemove', onMouseMove);
            document.addEventListener('mouseup', onMouseUp);
        } else if (e.type === 'touchstart') {
            const touch = e.touches[0];
            const rect = draggedShape.getBoundingClientRect();
            offsetX = touch.clientX - rect.left;
            offsetY = touch.clientY - rect.top;
            document.addEventListener('touchmove', onTouchMove, { passive: false });
            document.addEventListener('touchend', onTouchEnd, { passive: false });
        }
    }

    function onMouseMove(e) {
        if (draggedShape) {
            draggedShape.style.left = `${e.pageX - offsetX}px`;
            draggedShape.style.top = `${e.pageY - offsetY}px`;
        }
    }

    function onTouchMove(e) {
        if (draggedShape) {
            const touch = e.touches[0];
            draggedShape.style.left = `${touch.pageX - offsetX}px`;
            draggedShape.style.top = `${touch.pageY - offsetY}px`;
            e.preventDefault(); // Prevent default touch scrolling
        }
    }

    function onMouseUp(e) {
        handleDrop(e.pageX, e.pageY);
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
    }

    function onTouchEnd(e) {
        const touch = e.changedTouches[0];
        handleDrop(touch.pageX, touch.pageY);
        document.removeEventListener('touchmove', onTouchMove);
        document.removeEventListener('touchend', onTouchEnd);
    }

// Object to store the last X position for each container (no vertical movement)
let containerPositions = {};

function handleDrop(pageX, pageY) {
    if (draggedShape) {
        const dropContainers = document.querySelectorAll('.drop-container');
        let droppedInContainer = false;
        let draggedShapeNoteValue = noteValues[draggedShape.id.split('-')[0]] || 0;

        dropContainers.forEach(dropContainer => {
            const rect = dropContainer.getBoundingClientRect();
            const shapeNumber = dropContainer.getAttribute('shapenumber');

            if (pageX >= rect.left && pageX <= rect.right && pageY >= rect.top && pageY <= rect.bottom) {
                // Initialize container positions if not already set
                if (!containerPositions[shapeNumber]) {
                    // For container 1, start at 80px from the container's left edge
                    containerPositions[shapeNumber] = {
                        lastShapeX: (shapeNumber === '1') ? 20 : rect.left,  // Start at 80px for container 1, else from left of the container
                    };
                }

                // Get the last horizontal position for this container
                let lastShapeX = containerPositions[shapeNumber].lastShapeX;

                // Position the dragged shape inside the container

                draggedShape.style.top = `${rect.top}px`; // Align the top of the shape with the container

                // Update position for the next shape (keep a gap of 10px horizontally)
                containerPositions[shapeNumber].lastShapeX += draggedShape.offsetWidth + 10; // 10px gap

                // Update the container's total value based on shape number
                switch (shapeNumber) {
                    case '1':
                        totalNoteValue1 += draggedShapeNoteValue;
                        break;
                    case '2':
                        totalNoteValue2 += draggedShapeNoteValue;
                        break;
                    case '3':
                        totalNoteValue3 += draggedShapeNoteValue;
                        break;
                    case '4':
                        totalNoteValue4 += draggedShapeNoteValue;
                        break;
                    case '5':
                        totalNoteValue5 += draggedShapeNoteValue;
                        break;
                    case '6':
                        totalNoteValue6 += draggedShapeNoteValue;
                        break;
                    case '7':
                        totalNoteValue7 += draggedShapeNoteValue;
                        break;
                    case '8':
                        totalNoteValue8 += draggedShapeNoteValue;
                        break;
                }

                draggedShape.dataset.containerId = shapeNumber;
                droppedInContainer = true;
            }
        });

        if (!droppedInContainer) {
            draggedShape.remove(); // Remove shape if not dropped in a valid container
        } else {
            part1 = totalNoteValue1 + totalNoteValue2;
            part2 = totalNoteValue3 + totalNoteValue4;
            part3 = totalNoteValue5 + totalNoteValue6;
            part4 = totalNoteValue7 + totalNoteValue8;

            console.log(`Total for container 1 and 2: ${part1}`);
            console.log(`Total for container 3 and 4: ${part2}`);
            console.log(`Total for container 5 and 6: ${part3}`);
            console.log(`Total for container 7 and 8: ${part4}`);
            if(part1 === 2){part1Score = 1}
            if(part2 === 2){part2Score = 1}
            if(part3 === 2){part3Score = 1}
            if(part4 === 2){part4Score = 1}
        }
    }
    }
    level1.addEventListener('click', () => {
        if (part1 === 0 || part2 === 0 || part3 === 0 || part4 === 0) {
            alert('Please put the note or rest');
        } else {
            updateDatabase();
        }
    });

    function updateDatabase() {
        const scores = [
            {
                score1: part1Score,
                score2: part2Score,
                score3: part3Score,
                score4: part4Score
            }
        ];
        $.ajax({
            url: './ajax.levelScore.php',
            method: 'POST',
            data: {
                STUDENT_ID: user_lrn.value,
                scores
            },
            success: function (response) {
                console.log('Update successful');
                window.location.href = "./stages1.php";
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});

