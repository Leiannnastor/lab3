<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student Profile</h1>

    <form action="<?= base_url("save") ?>" method="post">
        <?php if(isset($lei['id'])){?>
            <input type="hidden" name="id" value="<?=$lei['id']?>">
        <?php }?>
        
        <label for="StudName">Name</label> 
        <input type="text" id="StudName" name="StudName" required value="<?= isset($lei['StudName']) ? $lei['StudName'] : '' ?>">
        
        <label for="StudGender">Gender</label>
        <select id="StudGender" name="StudGender" required>
            <option value="Male" <?= isset($lei['StudGender']) && $lei['StudGender'] === 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= isset($lei['StudGender']) && $lei['StudGender'] === 'Female' ? 'selected' : '' ?>>Female</option>
            <option value="Other" <?= isset($lei['StudGender']) && $lei['StudGender'] === 'Other' ? 'selected' : '' ?>>Other</option>
        </select>

        <label for="StudCourse">Course</label>
        <select id="StudCourse" name="StudCourse" required>
            <option value="BSIT" <?= isset($lei['StudCourse']) && $lei['StudCourse'] === 'BSIT' ? 'selected' : '' ?>>BSIT</option>
        </select>
        <label for="StudSection">Section</label>
        <select id="StudSection" name="StudSection" required>
            <option value="F1" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F1' ? 'selected' : '' ?>>F1</option>
            <option value="F2" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F2' ? 'selected' : '' ?>>F2</option>
            <option value="F3" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F3' ? 'selected' : '' ?>>F3</option>
            <option value="F4" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F4' ? 'selected' : '' ?>>F4</option>
            <option value="F5" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F5' ? 'selected' : '' ?>>F5</option>
            <option value="F6" <?= isset($lei['StudSection']) && $lei['StudSection'] === 'F6' ? 'selected' : '' ?>>F6</option>
        </select>
        <label for="StudYear">Year</label>
        <select id="StudYear" name="StudYear" required>
            <option value="First Year" <?= isset($lei['StudYear']) && $lei['StudYear'] === 'First Year' ? 'selected' : '' ?>>First Year</option>
            <option value="Second Year" <?= isset($lei['StudYear']) && $lei['StudYear'] === 'Second Year' ? 'selected' : '' ?>>Second Year</option>
            <option value="Third Year" <?= isset($lei['StudYear']) && $lei['StudYear'] === 'Third Year' ? 'selected' : '' ?>>Third Year</option>
            <option value="Fourth Year" <?= isset($lei['StudYear']) && $lei['StudYear'] === 'Fourth Year' ? 'selected' : '' ?>>Fourth Year</option>
        </select>
        <input type="submit" value="Save">
    </form>
    <table border="1">
        <th>Name</th>
        <th>Gender</th>
        <th>Course</th>
        <th>Section</th>
        <th>Year</th>
        <th>Action</th>
        <?php foreach ($main as $l): ?>
            <tr>
                <th><?=$l['StudName']?></th>
                <th><?=$l['StudGender']?></th>
                <th><?=$l['StudCourse']?></th>
                <th><?=$l['StudSection']?></th>
                <th><?=$l['StudYear']?></th>
                <th><a href="delete/<?= $l['id']?>">delete</a> <a href="/update/<?= $l['id']?>">edit</a></th>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>