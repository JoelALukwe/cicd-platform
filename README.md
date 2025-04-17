# Self-Hosted CI/CD Platform

## 🚀 Features
- Pipeline configuration via YAML
- Real-time log streaming
- Dockerized workers
- Distributed job execution

## 🛠 Tech Stack
| Technology | Purpose | Benefit |
|------------|---------|---------|
| **Laravel** | Frontend/API | Rapid development |
| **Redis** | Message broker | Pub/sub, persistence |
| **Python** | Job execution | Scripting flexibility |
| **Docker** | Containerization | Environment isolation |

## 💡 Skills Showcased
- **Distributed Systems**: Redis queue management
- **Real-Time Systems**: WebSocket integration
- **Cross-Language Integration**: PHP-Python bridge
- **DevOps**: Container orchestration

## 🛠 Setup
```bash
- docker-compose up --build


## 📖 Usage
php
Copy
// Dispatch CI job
RunPipeline::dispatch('ls -la');
