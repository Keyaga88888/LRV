SET NAMES utf8mb4;

SET time_zone = '+07:00';

ALTER DATABASE hrm

CHARACTER SET utf8mb4

COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS docker_test (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(100),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

INSERT INTO docker_test(name)

VALUES

('Docker Ready');


-- Bước 1: .dockerignore

-- File này giúp Docker không copy những file/thư mục không cần thiết vào image khi build. Điều này giúp:

-- Image nhỏ hơn.
-- Build nhanh hơn.
-- Không đưa các file nhạy cảm vào image.
-- Tận dụng cache Docker tốt hơn.

-- Bước 2: docker/mysql/init.sql
-- File:
-- docker/mysql/init.sql
-- Đây là nơi chạy lần đầu tiên khi MySQL khởi tạo volume mới.
-- Lưu ý quan trọng
-- File này chỉ chạy khi volume MySQL chưa tồn tại.
-- Nếu bạn đã có:
-- docker volume ls
-- và volume:
-- mysql_data
-- đã tồn tại thì init.sql sẽ không chạy lại.
-- Muốn chạy lại:
-- docker compose down -v
-- hoặc
-- docker volume rm ten_volume_mysql
-- rồi:
-- docker compose up -d

-- Có nên viết migration trong init.sql không?
-- Không.
-- Laravel đã có:
-- php artisan migrate
-- init.sql chỉ nên dùng cho:
-- Charset.
-- Collation.
-- Timezone.
-- Seed dữ liệu mặc định rất nhỏ (nếu cần).
-- Tạo user hoặc quyền đặc biệt của MySQL.
-- Toàn bộ bảng nghiệp vụ nên quản lý bằng Migration của Laravel.