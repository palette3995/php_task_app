-- タスクテーブル
DROP TABLE IF EXISTS tasks;

CREATE TABLE tasks (
    id BIGINT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    priority VARCHAR(10),
    deadline DATE,
    is_recurring BOOLEAN, -- 反復するかどうかのフラグ
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- テストデータ作成
INSERT INTO tasks (id, name, description, priority, deadline, is_recurring, created_at)
VALUES
    (1, 'Task 1', 'Description for Task 1', 'High', '2024-01-31', false, CURRENT_TIMESTAMP),
    (2, 'Task 2', 'Description for Task 2', 'Medium', '2024-02-15', true, CURRENT_TIMESTAMP),
    (3, 'Task 3', 'Description for Task 3', 'Low', '2024-03-10', true, CURRENT_TIMESTAMP),
    (4, 'Task 4', 'Description for Task 4', 'High', '2024-01-31', true, CURRENT_TIMESTAMP),
    (5, 'Task 5', 'Description for Task 5', 'Medium', '2024-02-15', false, CURRENT_TIMESTAMP),
    (6, 'Task 6', 'Description for Task 6', 'Low', '2024-03-10', false, CURRENT_TIMESTAMP);


-- 反復タスクテーブル
DROP TABLE IF EXISTS recurring_tasks;

CREATE TABLE recurring_tasks (
    id BIGINT PRIMARY KEY,
    task_id BIGINT,
    recurrence_pattern VARCHAR(20),
    days_of_week VARCHAR(255), -- 週次反復の場合、実行する曜日
    FOREIGN KEY (task_id) REFERENCES tasks(id)
);


-- テストデータ作成
INSERT INTO recurring_tasks (id, task_id, recurrence_pattern, days_of_week)
VALUES
    (1, 2, 'Weekly', 'Monday,Wednesday,Friday'),
    (2, 3, 'Monthly', NULL),
    (3, 4, 'Daily', NULL);
