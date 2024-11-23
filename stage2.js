const user_lrn = document.querySelector('#userlrn')
const level2 = document.querySelector(".level2");
const btnprev = document.querySelector('.btnprev')
btnprev.addEventListener('click', () => {
    window.location.href = "./stages.php";
});
let totalNoteValue1 = 0;  // Total value for dropContainer1
let totalNoteValue2 = 0;  // Total value for dropContainer2
let totalNoteValue3 = 0;  // Total value for dropContainer3
let totalNoteValue4 = 0;  // Total value for dropContainer4
let totalNoteValue5 = 0;  // Total value for dropContainer5
let totalNoteValue6 = 0;  // Total value for dropContainer6
let totalNoteValue7 = 0;  // Total value for dropContainer6
let totalNoteValue8 = 0;  // Total value for dropContainer6
let totalNoteValue9 = 0;  // Total value for dropContainer6
let totalNoteValue10 = 0;  // Total value for dropContainer6
let totalNoteValue11 = 0;  // Total value for dropContainer6
let totalNoteValue12 = 0;  // Total value for dropContainer6

// Define noteValues globally so it's accessible within the handleDrop function
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
let part1 = 0;
let part2 = 0;
let part3 = 0;
let part4 = 0;

let part1Score = 0;
let part2Score = 0;
let part3Score = 0;
let part4Score = 0;
// Initialize isShapeInContainer to track the state of each shape
let isShapeInContainer = {
    '1': false,
    '2': false,
    '3': false,
    '4': false,
    '5': false,
    '6': false,
    '7': false,
    '8': false,
    '9': false,
    '10': false,
    '11': false,
    '12': false
};
let draggedShape = null;
let offsetX, offsetY;
let initialPosition = {};
let isDropped = {}; // Track whether a shape is dropped
let droppedShapes = [];

$(document).ready(function () {
    // Save the initial positions of the shapes
    document.querySelectorAll('.shape').forEach(shape => {
        initialPosition[shape.id] = { left: shape.offsetLeft, top: shape.offsetTop };
        isDropped[shape.id] = false; // Initialize all shapes as not dropped

        shape.addEventListener('mousedown', startDrag);
        shape.addEventListener('touchstart', startDrag, { passive: false });
    });

    function startDrag(e) {
        e.preventDefault(); // Prevent default touch behavior
        draggedShape = e.target;
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
            draggedShape.style.position = 'absolute';
            draggedShape.style.left = `${e.pageX - offsetX}px`;
            draggedShape.style.top = `${e.pageY - offsetY}px`;
        }
    }

    function onTouchMove(e) {
        if (draggedShape) {
            const touch = e.touches[0];
            draggedShape.style.position = 'absolute';
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
    function handleDrop(pageX, pageY) {
        if (draggedShape) {
            const dropContainers = document.querySelectorAll('.drop-container');
            let droppedInContainer = false;  // Track if the shape is dropped inside a container
            let draggedShapeNoteValue = noteValues[draggedShape.id] || 0;  // Get the value of the dragged shape
            let previousContainerId = draggedShape.dataset.containerId || null; // Track the previous container the shape was in
        
            // Iterate over each drop container
            dropContainers.forEach(dropContainer => {
                const rect = dropContainer.getBoundingClientRect();
                const shapeNumber = dropContainer.getAttribute('shapenumber');  // Get the container number from the attribute
        
                // Check if the shape is dropped inside the container
                if (pageX >= rect.left && pageX <= rect.right && pageY >= rect.top && pageY <= rect.bottom) {
                    // Dropped into a drop container
                    const centerX = (rect.left + rect.right) / 2;
                    const centerY = (rect.top + rect.bottom) / 2;
                    const shapeWidth = draggedShape.offsetWidth;
                    const shapeHeight = draggedShape.offsetHeight;
        
                    // Center the dragged shape inside the container
                    draggedShape.style.left = `${centerX - shapeWidth / 2}px`;
                    draggedShape.style.top = `${centerY - shapeHeight / 2}px`;
        
                    // Update the container's total value based on shape
                    switch (shapeNumber) {
                        case '1':
                            totalNoteValue1 = draggedShapeNoteValue;
                            break;
                        case '2':
                            totalNoteValue2 = draggedShapeNoteValue;
                            break;
                        case '3':
                            totalNoteValue3 = draggedShapeNoteValue;
                            break;
                        case '4':
                            totalNoteValue4 = draggedShapeNoteValue;
                            break;
                        case '5':
                            totalNoteValue5 = draggedShapeNoteValue;
                            break;
                        case '6':
                            totalNoteValue6 = draggedShapeNoteValue;
                            break;
                        case '7':
                            totalNoteValue7 = draggedShapeNoteValue;
                            break;
                        case '8':
                            totalNoteValue8 = draggedShapeNoteValue;
                            break;
                        case '9':
                            totalNoteValue9 = draggedShapeNoteValue;
                            break;
                        case '10':
                            totalNoteValue10 = draggedShapeNoteValue;
                            break;
                        case '11':
                            totalNoteValue11 = draggedShapeNoteValue;
                            break;
                        case '12':
                            totalNoteValue12 = draggedShapeNoteValue;
                            break;
                    }
    
                    // Mark the dragged shape's container in the shape's data
                    draggedShape.dataset.containerId = shapeNumber;
        
                    droppedInContainer = true;
                }
            });
    
            // If the shape was not dropped inside any container, reset the corresponding total to 0
            if (!droppedInContainer) {
                if (previousContainerId !== null) {
                    switch (previousContainerId) {
                        case '1':
                            totalNoteValue1 = 0;  // Reset total for container 1
                            break;
                        case '2':
                            totalNoteValue2 = 0;  // Reset total for container 2
                            break;
                        case '3':
                            totalNoteValue3 = 0;  // Reset total for container 3
                            break;
                        case '4':
                            totalNoteValue4 = 0;  // Reset total for container 4
                            break;
                        case '5':
                            totalNoteValue5 = 0;  // Reset total for container 5
                            break;
                        case '6':
                            totalNoteValue6 = 0;  // Reset total for container 6
                            break;
                        case '7':
                            totalNoteValue7 = 0;  // Reset total for container 6
                            break;
                        case '8':
                            totalNoteValue8 = 0;  // Reset total for container 6
                            break;
                        case '9':
                            totalNoteValue9 = 0;  // Reset total for container 6
                            break;
                        case '10':
                            totalNoteValue10 = 0;  // Reset total for container 6
                            break;
                        case '11':
                            totalNoteValue11 = 0;  // Reset total for container 6
                            break;
                        case '12':
                            totalNoteValue12 = 0;  // Reset total for container 6
                            break;
                    }
                }
            }
            
            // Log the updated totals for each container
             part1 = totalNoteValue1 + totalNoteValue2 + totalNoteValue3;
             part2 = totalNoteValue4 + totalNoteValue5 + totalNoteValue6;
             part3 = totalNoteValue7 + totalNoteValue8 + totalNoteValue9;
             part4 = totalNoteValue10 + totalNoteValue11 + totalNoteValue12;

            console.log(`Total for container 1 2 and 3: ${part1}`);
            console.log(`Total for container 4 5 and 6: ${part2}`);
            console.log(`Total for container 7 8 and 9: ${part3}`);
            console.log(`Total for container 10 11 and 12: ${part4}`);
            if(part1 === 3){part1Score = 1}
           if(part2 === 3){part2Score = 1}
           if(part3 === 3){part3Score = 1}
           if(part4 === 3){part4Score = 1}
        }
    }
    level2.addEventListener('click', () => {
        if (part1 === 0 || part2 === 0 || part3 === 0 || part4 === 0) {
            alert('Please put the note or rest')
        }
        else{
            updateDatabase();
        }
    });
    
    function updateDatabase() {
       
        const scores = [{
            score1:part1Score,
            score2:part2Score,
            score3:part3Score,
            score4:part4Score
        }]
        $.ajax({
            url: './ajax.levelScore2.php',
            method: 'POST',
            data: {
                STUDENT_ID: user_lrn.value,
                scores
            },
            success: function (response) {
                console.log('Update successful: ');
                window.location.href = "./stages2.php";
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

});
